<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function login(){
        return view ('admin.login');
    }

    public function dashboard(){
        return view ('admin.layout.dashboard');
    }

    // public function category_list(){
    //     $categories = Category::get();

    // }
    
}
