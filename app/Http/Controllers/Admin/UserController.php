<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller{
    
    //==============start get data=====================

    public function user (){
        $users =User::get();
        return view ('admin.layout.users', compact('users'));
    }
    public function user_form (){
        return view ('admin.dashforms.userform');
    }
    //==============end get data=====================

    public function add_user (Request $request){
    //==============start form validation=====================

    $validator=validator::make($request->all(),
    [
        'username'=>'required|unique:users,u_username'  ,
        'email'=>'required|unique:users,u_email' ,
        'password'=>'required:users,u_pass'
    ],
    [
        'username.required'=>'username is required',
        'username.unique'=>'user name is already exist',
        'email.required'=>'email address is required',
        'password.required'=>'password is required'
    ]);

    if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInputs($request->flash());
    }
    //==============end form validation=====================

        User::create([
            'u_username' => 'username' , 
            'u_name' => 'name',
            'u_email' => 'email',
            'u_phone' => 'phone',
            'u_pass' => 'pass',
            'r_id' => '1'
        ]);
        return redirect()->back()->with('success','user created successfully');
        //==============start photo validation=====================
        $ext=$request->photo->getClientOriginalExtension();
        $filename = time().'.'.$ext ;
        $path='photos/users';
        $request->photo->move($path,$filename);
        //==============start photo validation=====================
    }

    //==============start delete user=====================
    public function delete_user ($id){
        $user= user::find($id);
        $user->delete();
        return redirect()->back()->with('deleted','deleted successfully');
     }
    //==============end delete user=====================
    //==============start edit category=====================

    public function edit_user($id){
        $user = user::find($id);
        $array=array('user'=>$user);
        return view('admin.editforms.useredit',$array) ;
    }
    //==============start edit category=====================
    
    //==============start save edited category=====================

    public function update_user (Request $request,$id){
      
        $user =user::find($id);
        $user->u_username =$request->get('username');
        $user->u_name =$request->get('name');
        $user->u_email =$request->get('email');
        $user->u_pass =$request->get('pass');
        $user->u_phone =$request->get('phone');
        // $category->u_photo =$request->get('photo');

        $user->save();
        return redirect()->back()->with('success','User Updated Successfully');
    }
    //==============start save edited category=====================


    
}
