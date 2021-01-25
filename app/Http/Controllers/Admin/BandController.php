<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Band;
class BandController extends Controller
{

    // public function band (){
    //     return view ('admin.layout.bands');
    // }
    public function show_band(){
        $bands = Band::get();
        return view ('admin.layout.bands',compact('bands'));

    }
    public function band_form (){
        return view ('admin.dashforms.bandform');
    }
    public function adds_band (Request $request){
        Band::create([
            'b_name' => $request->name ,
            'b_memnum' => $request->memnum ,
            'b_location' => $request->location,
            'b_createdyear'=> $request->createdyear,
            'b_bio'=> $request->bio
            ]);
            return redirect()->back()->with('success','band created successfully');
        }
}
