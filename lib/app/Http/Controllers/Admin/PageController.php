<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Cate;
use Illuminate\Support\Str;
use DB;
use File;
\Tinify\setKey("RFNrpzrNMXryj2ldvg7F5wSPFzpmbhWH");

class PageController extends Controller
{
    //
    public function getPage(){
    	$page = Page::all();
        // dd($data['count']);
    	return view('admin.page.page', ['page' => $page]);
    }

    public function getAddPage(){
    	$page_status = Page::where('page_status', 1)->count();
        $page_home = Page::where('page_status', 1)->get();
    	return view('admin.page.add_page', ['page_status' => $page_status, 'page_home' => $page_home]);
    }
    public function postAddPage(Request $request){

    	// $fileName = $request->page_image->getClientOriginalName();
    	$page = new page;
    	$page->page_title = $request->page_title;
    	$page->page_slug = Str::slug($request->page_title, '-');
    	// $page->page_image = $fileName;
    	$page->page_status = $request->page_status;
    	$page->page_content = $request->page_content;
    	$page->meta_key = $request->meta_key;
    	$page->meta_desc = $request->meta_desc;
    	
    	// $request->page_image->storeAs('upload/page', $fileName);

        if($request->hasFile('page_image')){
            $file = $request->file('page_image');
            $tag = $file->getClientOriginalExtension();
            $tag = strtolower($tag);
            if($tag != 'jpg' && $tag != 'png' && $tag != 'jpeg'){
                return redirect('admin/page/add')->with('loi', 'Vui Long Up Anh');
            }
            $names = Str::slug(strtolower($request->page_title)).'-'.Str::random(6).'.'.$tag;
            $file->move("public/upload/page/", $names);
            $path = "public/upload/page/".$names;
            $source = \Tinify\fromFile($path);
            if($page->page_status == 1){
                $resized = $source->resize(array(
                    "method" => "scale",
                    "width" => 120,
                ));
                $resized->toFile($path);
            }else{
                $source->toFile($path);
            }
            $page->page_image = $names;
            // $post->image_link = url('public')."/upload/post/".$names;

        }else{
             $page->page_image = "";
        }
        $page_title = $request->page_title;

        $page->save();

    	return redirect()->intended('admin/page')->with('success', 'Bạn vừa thêm trang thành công: <b>'.$page_title.'</b>');
    }

    public function getEditPage($id){
    	$data['page'] = page::find($id);
        $data['page_status'] = Page::where('page_status', 1)->get();
    	return view('admin.page.edit_page', $data);
    }
    public function postEditPage(Request $request, $id){
    	$page_detail = Page::find($id);
        $page_title = $page_detail->page_title;
        $page = new page;

    	$arr['page_title'] = $request->page_title;
    	$arr['page_slug'] = Str::slug($request->page_title, '-');
    	$arr['page_status'] = $request->page_status;
    	$arr['page_content'] = $request->page_content;
    	$arr['meta_key'] = $request->meta_key;
    	$arr['meta_desc'] = $request->meta_desc;
        if($request->hasFile('page_image')){
            $file = $request->file('page_image');
            $tag = $file->getClientOriginalExtension();
            $tag = strtolower($tag);
            if($tag != 'jpg' && $tag != 'png' && $tag != 'jpeg'){
                return redirect('admin/page/add')->with('loi', 'Vui Long Up Anh');
            }
            $names = Str::slug(strtolower($request->page_title)).'-'.Str::random(6).'.'.$tag;
            $file->move("public/upload/page/", $names);
            $path = "public/upload/page/".$names;
            $source = \Tinify\fromFile($path);

            if($request->page_status == 1){
                $resized = $source->resize(array(
                    "method" => "scale",
                    "width" => 120,
                ));
                $resized->toFile($path);
            }else{
                $source->toFile($path);
            }
            $arr['page_image'] = $names;
            // $post->image_link = url('public')."/upload/post/".$names;

        }else{
             $arr['page_image'] = $page_detail->page_image;
        }

    	$page::where('page_id', $id)->update($arr);
    	return redirect('admin/page')->with('success', 'Bạn vừa sửa trang thành công: <b>'.$page_title.'</b>');
    }

    public function getDeletePage($id){
        $page = Page::find($id);
        $page_count = Page::all()->count();
        $page_title = $page->page_title;
        if($page->page_status != 1 && $page_count > 2){
            $image_path = "public/upload/page/".$page->page_image;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            page::destroy($id);
            return back()->with('success', 'Bạn Vừa Xóa Trang: <b>'.$page_title.'</b>');
        }
    	
    	return redirect('admin/page')->with('success', 'Trang Chủ không được xóa, hoặc xóa gì xóa dữ vậy thím nhìn lại xem còn mấy trang');
    }
}
