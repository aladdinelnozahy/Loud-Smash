<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function user (){
        $users =User::get();
        return view ('admin.layout.users', compact('users'));
    }
    public function user_form (){
        return view ('admin.dashforms.userform');
    }
    
    public function add_user (Request $request){

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
        return redirect()->back()->withErrors($validator)->withInputs($request->all());
    }
        User::create([
            'u_username' => 'username' , 
            'u_name' => 'name',
            'u_email' => 'email',
            'u_phone' => 'phone',
            'u_pass' => 'pass',
            'r_id' => '1'
        ]);
        return redirect()->back()->with('success','user created successfully');
    }

}
