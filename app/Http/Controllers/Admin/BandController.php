<?php

namespace App\Http\Controllers\Admin;

use App\Models\Band;
use App\Traits\PhotosTrait;
use Illuminate\Http\Request;
use App\Http\Requests\BandRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BandController extends Controller
{
    use PhotosTrait;

    //==============start get data=====================
    public function show_band()
    {
        $bands=Band::paginate(PAGINATE);

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
// dd($request->name);
        //==============start photo validation==============
        $filename =  $this->savePhoto($request->photo , Band::$photodirectory);

        //==============end photo validation==============

        //==============start add new band==============
        $test = Band::create([
            'b_name' => $request->name ,
            'b_memnum' => $request->memnum ,
            'b_location' => $request->location,
            'b_createdyear'=> $request->createdyear,
            'b_bio'=> $request->bio,
            'b_photo'=> $filename
            ]);
           // dd($test);
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
        if(!$band){
            return redirect()->route('admin.bands');
        }else{
            return view('admin.editforms.bandedit',$array,compact('band')) ;

        }
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

        if ($request->photo) {
            $filename =$this->savePhoto($request->photo, Band::$photodirectory);
            $band->b_photo =$filename ;
        }
        $band->save();
        return redirect()->back()->with('success','band Updated Successfully');
    }
    //==============start save edited band=====================

}


