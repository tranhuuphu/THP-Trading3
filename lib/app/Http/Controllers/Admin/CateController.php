<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Cate;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;

class CateController extends Controller
{
    //
    public function getCate(){
    	$data['cateList'] = Cate::all();
        $data['cate_parent'] = Cate::where('parent_cate_id', 0)->get();
    	return view('admin.cate.cate', $data);
    }
    public function postCate(Request $request){
    	$cate = new Cate;
    	$cate->cate_name       = $request->name;
    	$cate->cate_slug       = Str::slug($request->name, '-');
        $cate->parent_cate_id  = $request->parent_cate_id;
    	$cate->meta_key        = $request->meta_key;
    	$cate->meta_desc       = $request->meta_desc;
    	$cate->save();
    	return back();
    }

    public function getEditCate($id){
    	$data['cate'] = Cate::find($id);
        $data['cate_parent'] = Cate::where('parent_cate_id', 0)->get();
    	return view('admin.cate.edit_cate', $data);
    }
    public function postEditCate(Request $request, $id){
    	$cate = Cate::find($id);
    	$cate->cate_name       = $request->name;
    	$cate->cate_slug       = Str::slug($request->name, '-');
        $cate->parent_cate_id  = $request->parent_cate_id;
    	$cate->meta_key        = $request->meta_key;
    	$cate->meta_desc       = $request->meta_desc;
    	$cate->save();
    	return redirect()->intended('admin/cate');
    }


    public function getDeleteCate($id){
    	Cate::destroy($id);
    	return back();
    }
}
