<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Cate;
use Illuminate\Support\Str;
use DB;

use Spatie\Permission\Models\Role;
use Hash;

class UserController extends Controller
{
    //
    public function getUser(){
     //    $roles = Role::pluck('name','name')->all();
    	$user = User::all();
    	// return view('users.index', compact('data', 'roles'));

        // $data = User::orderBy('id','DESC')->paginate(5);
        return view('admin.user.user',compact('user'));
    }

    public function postAddUser(Request $request){
    	$this->validate($request, [
            'email' => 'required|unique:thp_user,email',
            'password' => 'required',
            'rePassword' => 'required|same:password'
        ], [
            'email.unique' => 'Email đã tồn tại',
            'rePassword.same' => 'Không khớp'
        ]);
        $user = new User;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->level = $request->level;
    	$user->save();

        $user->assignRole($request->input('roles'));

    	return redirect()->intended('admin/user')->with('error', 'Tạo tài khoản thành công');
    }

    public function getEditUser($id){
    	$user = User::find($id);
        $level = User::where('level', 1)->get();

        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();

        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
        

    	return view('admin.user.edit_user', compact('user','level','roles','userRole'));
    }
    public function postEditUser(Request $request, $id){
    	$user = new User;

    	$arr['user_title'] = $request->user_title;
    	$arr['user_slug'] = Str::slug($request->user_title, '-');
    	$arr['level'] = $request->level;
    	$arr['user_content'] = $request->user_content;
    	$arr['meta_key'] = $request->meta_key;
    	$arr['meta_desc'] = $request->meta_desc;
    	if($request->hasFile('user_image')){
    		$user_image = $request->user_image->getClientOriginalName();
    		$arr['user_image'] = $user_image;
    		$request->user_image->storeAs('upload/user', $user_image);
    	}

    	$user::where('user_id', $id)->update($arr);
    	return redirect('admin/user');
    }

    public function getDeleteUser($id){
    	user::destroy($id);
    	return back();
    }
}
