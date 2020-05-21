<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Cate;
use Illuminate\Support\Str;
use DB;
use Session;
use File;
\Tinify\setKey("RFNrpzrNMXryj2ldvg7F5wSPFzpmbhWH");
\Tinify\validate();

$compressionsThisMonth = \Tinify\compressionCount();
if ($compressionsThisMonth > 499) {
  \Tinify\setKey("3VpD2ud7hiZBpYaIBl3xe66kLUUrizfM");
  \Tinify\validate();
}


class PostController extends Controller
{
    
    function __construct()
    {
         $this->middleware('permission:post-list|post-create|post-edit|post-delete', ['only' => ['getPost']]);
         $this->middleware('permission:post-create', ['only' => ['getAddPost','postAddPost']]);
         $this->middleware('permission:post-edit', ['only' => ['getEditPost','postEditPost']]);
         $this->middleware('permission:post-delete', ['only' => ['getDeletePost']]);
    }


    public function getPost(){
    	$data['post'] = DB::table('post')->join('cate', 'post.post_cate_id', '=', 'cate.cate_id')->orderBy('post_id', 'desc')->get();
        // dd($data['post']);
    	return view('admin.post.post', $data);
    }

    public function getAddPost(){
    	$data['cate'] = Cate::all();
    	return view('admin.post.add_post', $data);
    }
    public function postAddPost(Request $request){

    	// $fileName = $request->post_image->getClientOriginalName();
    	$post = new Post;
    	$post->post_title = $request->post_title;
    	$post->post_slug = Str::slug($request->post_title, '-');
    	$post->post_intro = $request->post_intro;
    	$post->post_view = 0;
    	$post->post_status = $request->post_status;
    	$post->post_featured = $request->post_featured;
    	$post->post_content = $request->post_content;
        $post->post_content_slug = Str::slug($request->post_content);
    	$post->meta_key = $request->meta_key;
    	$post->meta_desc = $request->meta_desc;
    	$post->post_cate_id = $request->post_cate_id;
    	// dd($file = $request->file('post_image'));
        if($request->hasFile('post_image')){
            $file = $request->file('post_image');
            $tag = $file->getClientOriginalExtension();
            $tag = strtolower($tag);
            if($tag != 'jpg' && $tag != 'png' && $tag != 'jpeg'){
                return redirect('admin/post/add')->with('loi', 'Vui Long Up Anh');
            }
            $names = Str::slug(strtolower($request->post_title)).'-'.Str::random(6).'.'.$tag;
            $file->move("public/upload/post/", $names);
            $path = "public/upload/post/".$names;
            $source = \Tinify\fromFile($path);

            // $resized = $source->resize(array(
            //     "method" => "scale",
            //     "width" => 500,
            // ));
            $source->toFile($path);
            $post->post_image = $names;
            // $post->image_link = url('public')."/upload/post/".$names;

        }else{
            $post->post_image = "";
        }
        Session::flash('name', $request->post_title);

    	$post->save();


    	return redirect()->intended('admin/post');
    }

    public function getEditPost($id){
    	$data['post'] = Post::find($id);
    	$data['cate'] = Cate::all();
    	return view('admin.post.edit_post', $data);
    }
    public function postEditPost(Request $request, $id){
    	$post = new Post;
        $post_detail = Post::find($id);
    	$arr['post_title'] = $request->post_title;
    	$arr['post_slug'] = Str::slug($request->post_title, '-');
    	$arr['post_intro'] = $request->post_intro;
    	$arr['post_status'] = $request->post_status;
    	$arr['post_featured'] = $request->post_featured;
    	$arr['post_content'] = $request->post_content;
        $arr['post_content_slug'] = Str::slug($request->post_content);
    	$arr['meta_key'] = $request->meta_key;
    	$arr['meta_desc'] = $request->meta_desc;
    	$arr['post_cate_id'] = $request->post_cate_id;
    	if($request->hasFile('post_image')){

            $file = $request->file('post_image');
            $tag = $file->getClientOriginalExtension();
            $tag = strtolower($tag);
            if($tag != 'jpg' && $tag != 'png' && $tag != 'jpeg'){
                return redirect('admin/post/add')->with('loi', 'Vui Long Up Anh');
            }
            
            $path_image_del = 'public/upload/post'. $post_detail['post_image'];
            if(File::exists($path_image_del)) {
	            File::delete($path_image_del);
	        }
            
            $names = Str::slug(strtolower($request->post_title)).'-'.Str::random(6).'.'.$tag;
            $file->move("public/upload/post/", $names);
            $path = "public/upload/post/".$names;
            $source = \Tinify\fromFile($path);


            $source->toFile($path);
            $post->post_image = $names;
            // $post->image_link = url('public')."/upload/post/".$names;

        }else{
            $post->post_image = $post_detail['post_image'];
        }
        Session::flash('name', $request->post_title);

    	$post::where('post_id', $id)->update($arr);
    	return redirect('admin/post');
    }

    public function getDeletePost($id){
        $post_detail = Post::find($id);
        $post_title = $post_detail->post_title;
        $post_image = $post_detail->post_image;
        $image_path = "public/upload/post/".$post_image;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
    	Post::destroy($id);
    	return back()->with('success', 'Bạn Vừa Xóa Thành Công Bài Viết: '.$post_title);;
    }

}
