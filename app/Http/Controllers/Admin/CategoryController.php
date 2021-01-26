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
    //==============start route category form=====================

    public function category_form (){
        return view ('admin.dashforms.categoryform');
    }
    //==============end route category form=====================

    //==============start add category=====================

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
            withInputs($request->flash());
        }
        Category::create([
            'name' => $request->name     
        ]);
        return redirect()->back()->with('success','category created successfully');
    }
    //==============end add category=====================

    //==============start delete category=====================
    public function delete_category ($id){
       $category= category::find($id);
       $category->delete();  //parent row 
       $category->songs()->delete();   //child row
       return redirect()->back()->with('deleted','deleted successfully');
    }
    //==============end delete category=====================

    //==============start edit category=====================

    public function edit_category($id){
        $category = category::find($id);
        $array=array('category'=>$category);
        return view('admin.editforms.categoryedit',$array) ;
    }
    //==============start edit category=====================

    //==============start save edited category=====================

    public function update_category (Request $request,$id){
      
        $category =category::find($id);
        $category->c_name =$request->get('name');
        $category->save();
        return redirect()->back()->with('success','Category Updated Successfully');
    }
    //==============start save edited category=====================
    //==============start show category songs=====================

    public function show_category_songs ($id){
        return category::find($id); 
    }

    //==============end show category songs=====================

    //==============start search category=====================
    public function search_category(Request $request){
        // return $request  ->k;
    }
    //==============endsearch songs=====================

}
