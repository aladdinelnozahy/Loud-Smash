<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Song;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;


class SongController extends Controller
{
    //==============start data view =====================

    public $timestamps = false;

    public function song (){
        $songs=Song::get();
        return view ('admin.layout.songs',compact('songs'));
    }
    //==============end data view =====================

    //==============start song form =====================

    public function song_form (){
        $songs=Song::get();
        return view ('admin.dashforms.songform',compact('songs'));
    }
    //==============end song form =====================

    public function add_song (Request $request){


    //==============start form validation =====================

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

    //==============end form validation =====================
    
    //==============start photo validation ==================
    $ext = $request->photo->getClientOriginalExtension();
    $filename =time().'.'.$ext;
    $path = 'photos/songs';
    $request->photo->move($path,$filename);

    //==============endadd photo validation ======================

    

    //==============start add new song =====================

        Song::create([
            's_name' => $request->name ,
            's_author' => $request->author ,
            's_reldate' => $request->reldate , 
            'b_id' =>'' 
            
        ]);
        return redirect()->back()->with('success','song created successfully');
    }
    //==============end add new song =====================
    //==============start delete song=====================
    public function delete_song ($id){
        $song= song::find($id);
        $song->delete();
        return redirect()->back()->with('deleted','deleted successfully');
     }
     //==============end delete song=====================
 


}
