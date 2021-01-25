<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category (){
        $categories=category::get();
        return view ('admin.layout.categories',compact('categories'));
    }
    public function category_form (){
        return view ('admin.dashforms.categoryform');
    }
    public function add_category (Request $request){
        Category::create([
            'c_name' => $request->name 
            
        ]);
        return redirect()->back()->with('success','category created successfully');
    }
}
