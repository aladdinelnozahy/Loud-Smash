<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public $timestamps = false;

    public function song (){
        $songs=Song::get();
        return view ('admin.layout.songs',compact('songs'));
    }
    public function song_form (){
        return view ('admin.dashforms.songform');
    }
    public function add_song (Request $request){
        Song::create([
            's_name' => $request->name ,
            's_author' => $request->name ,
            's_reldate' => $request->name , 
            'b_id' => $request->name 
            
        ]);
        return redirect()->back()->with('success','song created successfully');
    }
}
