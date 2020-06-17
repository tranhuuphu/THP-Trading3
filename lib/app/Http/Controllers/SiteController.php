<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Cate;
use App\Models\Page;
use App\Models\Carousel;
use DB;
use Session;
use Illuminate\Support\Str;

class SiteController extends Controller
{
    //
    public function getHome(){

        $carousel = null;
        $featured = null;
        $home_meta = null;
        $recent = null;

        $carousel = Carousel::orderBy('id', 'desc')->take(6)->get();
        $featured = DB::table('post2')->join('cate2','cate2.cate_id','=','post2.post_cate_id')->orderBy('post_id', 'desc')->where('post_featured', '=' , 1)->take(4)->get()->toArray();

        // dd($featured);
        

        $home_meta = Page::where('page_status', 1)->first();

        // $featured2 = json_decode($featured, true);
        // dd($featured2);

        // $notIn = array();
        foreach($featured as $ft){
            $notIn[] = $ft->post_id;
            // echo $ft['post_cate_id'];
        }


        
        if($notIn != null){
            $recent = DB::table('post2')->orderBy('post_id', 'desc')->whereNotIn('post_id', $notIn)->get();
        }
        
    	return view('site.home', compact('featured', 'recent', 'home_meta', 'carousel'));

    	
    }

    public function getCatePost($slug){
    	
        $cate_detail = Cate::where('cate_slug', $slug)->first();
        // dd($cate_detail);
        if(!$cate_detail || $cate_detail == null){
            return view('notice.404');
        }

		$cate_id = $cate_detail->cate_id;

		// $cate_title = $cate_slug['0']['cate_name'];

		$post_cate = Post::where('post_cate_id', $cate_id)->orderBy('post_id', 'desc')->simplePaginate(11);
        if(count($post_cate) == 0){
            return view('notice.400');
        }

        // Most Read

        $most_read = Post::take(6)->orderBy('post_view', 'desc')->get();
		
    	return view('site.post', compact('cate_detail', 'post_cate', 'slug', 'most_read'));
    }

    public function getPost($cate, $post_slug){
        
        $id_array = explode('-', $post_slug);

        $id_shift = array_pop($id_array);

        $id_check = $id_shift;
        $id_check_count = strlen($id_check);

        $id = (int)$id_shift;
        $id_check_count2 = strlen($id);


        $post_slug = implode("-", $id_array);

        $post_detail = Post::find($id);
        // dd($id);
        // dd($post_detail);

        if(!$post_detail || $post_detail == null){
            return view('notice.404');
        }

        $sessionKey = 'post_'.$id;

        $sessionView = Session::get($sessionKey);
        $post = Post::findOrFail($id);
        if (!$sessionView) { //nếu chưa có session
            Session::put($sessionKey, 1); //set giá trị cho session
            $post->increment('post_view');
        }

        $cate_data = Cate::find($post_detail->post_cate_id);

        $post_slug_2 = $post_detail->post_slug;

        $cate_slug = $cate_data->cate_slug;
        
        if($cate_slug == null && !isset($cate_slug)){
            return redirect(asset(''.'uncategory/'.$post_slug_2.'-'.$id.'.html'));
            return false;
        }


        if($post_slug != $post_slug_2 || $cate != $cate_slug || $id_check_count != $id_check_count2){
            return redirect(asset(''.$cate_slug.'/'.$post_slug_2.'-'.$id.'.html'));
            return false;
        }

        // related

        $previous = Post::where('post_id', '<', $post->post_id)->orderBy('post_id', 'desc')->take(3)->get();
        $next = Post::where('post_id', '>', $post->post_id)->orderBy('post_id', 'asc')->take(3)->get();


    	return view('site.getPost', compact('cate_data', 'post_detail', 'cate_slug', 'post_slug_2', 'previous', 'next'));

        
    }

    public function getSearch(Request $request){
        $result = $request->q;
        
        $show_result = $result;
        // $result = Str::slug($result);

        // if($result == null || $result == ''){
        //     return view('notice.401');
        // }



        // $search = Post::where('post_slug', 'like', '%'.$result.'%')->orWhere('post_content_slug', 'like', '%' .$result.'%')->simplePaginate(8);
        // if($search == null || $search == ''){
        //     return view('notice.401');
        // }

        return view('site.search', ['show_result' => $show_result]);
    }

    public function getPage($page){
        $page_result = Page::where('page_slug', $page)->first();
        if(!$page_result || $page_result == null){
            return view('notice.404');
        }
        // dd($page_result);
        return view('site.page', ['page_result' => $page_result]);
    }

    public function getSiteMap(){

        $page = Page::select('page_slug')->get();

        $cate = Cate::select('cate_slug', 'cate_id')->get();

        $post = Post::select('post_slug', 'post_cate_id', 'post_id')->get();

        return response()->view('site.site-map', [
          'page' => $page,
          'cate' => $cate,
          'post' => $post,
      ])->header('Content-Type', 'text/xml');
    }


}
