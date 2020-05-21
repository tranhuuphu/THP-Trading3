<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use App\Models\Carousel;

use File;

use DB;
use Session;

\Tinify\setKey("RFNrpzrNMXryj2ldvg7F5wSPFzpmbhWH");
\Tinify\validate();

$compressionsThisMonth = \Tinify\compressionCount();
if ($compressionsThisMonth > 499) {
  \Tinify\setKey("3VpD2ud7hiZBpYaIBl3xe66kLUUrizfM");
  \Tinify\validate();
}

class CarouselController extends Controller
{
    //
    public function getCarousel(){
    	$data['carousel'] = Carousel::orderBy('id', 'desc')->get();
        // dd($data['post']);
    	return view('admin.carousel.carousel', $data);
    }

    // public function getAddPost(){
    // 	$data['cate'] = Cate::all();
    // 	return view('admin.post.add_post', $data);
    // }
    public function postCarousel(Request $request){

    	// $fileName = $request->post_image->getClientOriginalName();
    	$carousel = new Carousel;
    	$carousel->carousel_title = $request->carousel_title;
    	$carousel->carousel_slug = Str::slug($request->carousel_title, '-');

        if($request->hasFile('carousel_image')){
            $file = $request->file('carousel_image');
            $tag = $file->getClientOriginalExtension();
            $tag = strtolower($tag);
            if($tag != 'jpg' && $tag != 'png' && $tag != 'jpeg'){
                return redirect('admin/post/add')->with('loi', 'Vui Long Up Anh');
            }
            $names = Str::slug(strtolower($request->carousel_title)).'-'.Str::random(6).'.'.$tag;
            $file->move("public/upload/carousel/", $names);
            $path = "public/upload/carousel/".$names;
            $source = \Tinify\fromFile($path);

            // $resized = $source->resize(array(
            //     "method" => "scale",
            //     "width" => 500,
            // ));
            $source->toFile($path);
            $carousel->carousel_image = $names;
            // $post->image_link = url('public')."/upload/post/".$names;

        }else{
            $carousel->carousel_image = "";
        }
        Session::flash('name', $request->carousel_title);

    	$carousel->save();


    	return redirect()->intended('admin/carousel');
    }

    public function getEditCarousel($id){
    	$data['carousel'] = Carousel::find($id);
    	return view('admin.carousel.edit_carousel', $data);
    }
    public function postEditCarousel(Request $request, $id){
    	$carousel = new Carousel;
    	$carousel_detail = Carousel::find($id);
    	$arr['carousel_title'] = $request->carousel_title;
    	$arr['carousel_slug'] = Str::slug($request->carousel_title, '-');

    	if($request->hasFile('carousel_image')){

            $file = $request->file('carousel_image');
            $tag = $file->getClientOriginalExtension();
            $tag = strtolower($tag);
            if($tag != 'jpg' && $tag != 'png' && $tag != 'jpeg'){
                return redirect('admin/carousel/add')->with('loi', 'Vui Long Up Anh');
            }
            
            $path_image_del = 'public/upload/carousel/'. $carousel_detail['carousel_image'];
            if(File::exists($path_image_del)) {
	            File::delete($path_image_del);
	        }
            
            $names = Str::slug(strtolower($request->carousel_title)).'-'.Str::random(6).'.'.$tag;
            $file->move("public/upload/carousel/", $names);
            $path = "public/upload/carousel/".$names;
            $source = \Tinify\fromFile($path);


            $source->toFile($path);
            $arr['carousel_image'] = $names;
            // $post->image_link = url('public')."/upload/post/".$names;

        }else{
            $arr['carousel_image'] = $carousel_detail['carousel_image'];
        }
        Session::flash('name', $request->carousel_title);

    	$carousel::where('id', $id)->update($arr);
    	return redirect('admin/carousel');
    }

    public function getDeleteCarousel($id){
        $carousel_detail = Carousel::find($id);
        $carousel_title = $carousel_detail->carousel_title;
        $carousel_image = $carousel_detail->carousel_image;
        $image_path = "public/upload/carousel/".$carousel_image;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
    	Carousel::destroy($id);
    	return back()->with('success', 'Bạn Vừa Xóa Thành Công Slide: '.$carousel_title);;
    }
}
