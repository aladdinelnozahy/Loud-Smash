<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artist;
use Illuminate\Support\Facades\Validator;


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
        //==============start validation=====================

        $validator=validator::make($request->all(),
        [
            'name'=>'required|unique:artists,a_name',
            'about'=>'required:artists,a_about'
        ],
        [   
            'name.required'=>'Artist name is required',
            'about.required'=>'tybe some thing about this artist'

        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        //==============end validation =====================

        //==============start photo validation=====================
         $ext = $request->photo->getClientOriginalExtension();
         $filename= time() .'.'. $ext;
         $path= 'photos/artists';
         $request->photo->move($path,$filename);
        //==============start photo validation=====================


        //==============start add new artist=====================
        Artist::create([
            'a_name' => $request ->name ,
            'a_age'=> $request ->age ,
            'a_about' => $request ->about,
            'a_photo'=>$request->photo
        ]);
        return redirect()->back()->with('success','artist created successfully');
        //==============end add new artist=====================
    }
    

        //==============start delete user=====================
        public function delete_artist ($id){
            $artist= artist::find($id);
            $artist->delete();
            return redirect()->back()->with('deleted','deleted successfully');
         }
        //==============end delete user=====================
    
    
}
