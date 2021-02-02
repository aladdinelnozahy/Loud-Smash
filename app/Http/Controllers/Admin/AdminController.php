<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        $login =User::select('u_username', 'u_name','u_email','u_pass','u_role')->where('U_email',$email)->get();
        // return view ('admin.layout.dashboard');
        if($login ->count() == 1){
            foreach($login as $lo){
                // dd($login,$lo,$lo->u_role,$lo->u_username, session()->get('u_username'));
                $request ->Session()->put('u_username',$lo->u_username);
                $request ->Session()->put('u_role',$lo->u_role);
                //dd($request);
                // dd($request,$lo,Session()->get('u_role'));
                // Auth::login($login[0]);
                // dd(session()->get('u_username'));

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
