<?php

namespace App\Http\Controllers\Admin;

use App\Models\Band;
use Illuminate\Http\Request;
use App\Http\Requests\BandRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BandController extends Controller
{
    //==============start get data=====================
    public function show_band()
    {
        $bands = Band::get();
        return view('admin.layout.bands', compact('bands'));
    }
    //==============end get data=====================

    //==============start form view==============
    public function band_form()
    {
        return view('admin.dashforms.bandform');
    }
    //==============end form view==============
    public function add_band(BandRequest $request){
      
        //==============start photo validation==============
        $filename =  $this->savePhoto($request->photo , 'photos/bands' );

        //==============end photo validation==============
    
        //==============start add new band==============
        Band::create([
            'b_name' => $request->name ,
            'b_memnum' => $request->memnum ,
            'b_location' => $request->location,
            'b_createdyear'=> $request->createdyear,
            'b_bio'=> $request->bio
            ]);
        return redirect()->back()->with('success', 'band created successfully');
    }
    //==============end add new band==============
    
    //==============start delete band=====================
    public function delete_band($id)
    {
        $band= band::find($id);
        $band->delete();
        return redirect()->back()->with('deleted', 'deleted successfully');
    }
    //==============end delete band=====================
    //==============start edit category=====================

    public function edit_band($id){
        $band = band::find($id);
        $array=array('band'=>$band);
        return view('admin.editforms.bandedit',$array) ;
    }
    //==============start edit category=====================
    //==============start save edited band=====================

    public function update_band (Request $request,$id){
    
        $band =band::find($id);
        $band->b_name =$request->get('name');
        $band->b_memnum =$request->get('memnum');
        $band->b_location =$request->get('location');
        $band->b_createdyear =$request->get('createdyear');
        $band->b_bio =$request->get('bio');
        $band->save();
        return redirect()->back()->with('success','band Updated Successfully');
    }
    //==============start save edited band=====================
    
}


