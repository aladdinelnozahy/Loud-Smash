<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public $timestamps = false;

    public function show_artist (){
        $artists=Artist::get();
        return view ('admin.layout.artists',compact('artists'));
    }
    public function artist_form (){
        return view ('admin.dashforms.artistform');
    }
    public function add_artist (Request $request){
        Artist::create([
            'a_name' => $request ->name ,
            'a_age'=> $request ->age ,
            'a_about' => $request ->about
        ]);
        return redirect()->back()->with('success','artist created successfully');
    }
}
