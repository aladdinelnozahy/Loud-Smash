<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

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
        // validation 
       $validator= validator::make($request->all(),
        [
            'name'=>'required|unique:categories,c_name'
        ],
        [
            'name.required'=> 'category name field is required' ,
            'name.unique' => 'category already exist'
        ]);
        if ($validator -> fails()){
            return redirect()->back()->withErrors($validator)->
            withInputs($request->all());
        }
        Category::create([
            'name' => $request->name     
        ]);
        return redirect()->back()->with('success','category created successfully');
    }
    //==============start delete category=====================
    public function delete_category ($id){
       $category= category::find($id);
       $category->delete();
       return redirect()->back()->with('deleted','deleted successfully');
    }
    //==============end delete category=====================

    //==============start edit category=====================

    public function edit_category($is){
        // return $id;
    }
    //==============start edit category=====================

}
