<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

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
