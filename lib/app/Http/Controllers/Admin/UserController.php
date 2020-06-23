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
    
    function __construct()
    {
         $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','show']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::orderBy('id','DESC')->paginate(5);
        return view('admin.users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('admin.users.create',compact('roles'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);


        $input = $request->all();
        $input['password'] = bcrypt($request->password);


        $user = User::create($input);
        $user->assignRole($request->input('roles'));


        return redirect()->route('admin.users.index')
                        ->with('success','User created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        // dd($user);
        return view('admin.users.show',compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();


        return view('admin.users.edit',compact('user','roles','userRole'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = new User;
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);


        // $input = $request->all();
        $input['name'] = $request->name;
        $input['email'] = $request->email;

        if(!empty($request->password)){ 
            $input['password'] = bcrypt($request->password);
        }
        // dd($input);

        // if(!empty($input['password'])){ 
        //     $input['password'] = Hash::make($input['password']);
        // }else{
        //     $input = array_except($input,array('password'));    
        // }

        $user::where('id', $id)->update($input);
        $user = User::find($id);
        // $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();


        $user->assignRole($request->input('roles'));


        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }




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
