<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function login(){
        return view ('admin.login');
    }

    public function dashboard(){
        return view ('admin.layout.dashboard');
    } 
    public function user_login(Request $request){
        $email =$request->email ;
        $pass =$request->pass ;
        $login =User::select('u_emaiL','u_pass')->where('U_email',$email)->
                                        where('U_pass',$pass)->get();
        // return view ('admin.layout.dashboard');
        if($login ->count() == 1){
            foreach($login as $lo){
                $request ->Session()->put('u_username',$lo->username);
                $request ->Session()->put('u_role',$lo->role);
                return redirect()->route('admin.dashboard');
            }
           
        }else{
            return redirect()->back()->with('failed' , 'invailed login');

        }

    }
    public function user_logout(Request $request){
        $request->Session()->flush();
         return redirect()->route('admin.login');
    }   

    // }
    
}
