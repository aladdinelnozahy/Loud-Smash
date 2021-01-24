<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view ('admin.login');
    }

    public function dashboard(){
        return view ('admin.layout.dashboard');
    }
    public function user (){
        return view ('admin.layout.users');
    }
    public function artist (){
        return view ('admin.layout.artists');
    }
    public function band (){
        return view ('admin.layout.bands');
    }
    public function song (){
        return view ('admin.layout.songs');
    }
    public function event (){
        return view ('admin.layout.events');
    }
    public function category (){
        return view ('admin.layout.categories');
    }
}
