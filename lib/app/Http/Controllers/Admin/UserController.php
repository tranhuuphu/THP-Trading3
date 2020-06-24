<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
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


        // $input = $request->all();
        // $input['password'] = bcrypt($request->password);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        // $user->level = $request->level;
        $user->save();


        // $user = User::create($input);
        $user->assignRole($request->input('roles'));


        return redirect('admin/users')->with('success','User created successfully');
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



    public function getEditUser($id){
        $user = User::find($id);

        if($id != Auth::user()->id || !isset($user)){
            return redirect('admin/user/edit/'.Auth::user()->id);
        }

        

        return view('admin.users.edit_one', compact('user'));
    }
    public function postEditUser(Request $request, $id){
        $user = new User;

        $input['name'] = $request->name;
        if(!empty($request->password)){ 
            $input['password'] = bcrypt($request->password);
        }



        $user::where('id', $id)->update($input);
        return redirect('admin/home');
    }



}
