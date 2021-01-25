<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Song;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;


class SongController extends Controller
{
    public $timestamps = false;

    public function song (){
        $songs=Song::get();
        return view ('admin.layout.songs',compact('songs'));
    }
    public function song_form (){
        $songs=Song::get();
        return view ('admin.dashforms.songform',compact('songs'));
    }
    public function add_song (Request $request){
        $validator=Validator::make($request->all(),
        [
            'name'=>'required:songs,s_name'
        ],
        [
            'name.required'=>'Song name is required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }


        Song::create([
            's_name' => $request->name ,
            's_author' => $request->author ,
            's_reldate' => $request->reldate , 
            'b_id' =>'' 
            
        ]);
        return redirect()->back()->with('success','song created successfully');
    }
}
