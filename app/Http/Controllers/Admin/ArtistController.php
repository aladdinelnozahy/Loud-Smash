<?php

namespace App\Http\Controllers\Admin;

use App\Models\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArtistRequest;
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
    public function add_artist (ArtistRequest $request){

        //==============start photo validation=====================
       $filename = $this->savePhoto($request->photo , 'photos/artists' );
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
        //==============start edit category=====================

        public function edit_artist($id){
            $artist = artist::find($id);
            $array=array('artist'=>$artist);
            return view('admin.editforms.artistedit',$array) ;
        }
        //==============start edit category=====================
        //==============start save edited artist=====================

        public function update_artist (Request $request,$id){
      
            $artist =artist::find($id);
            $artist->a_name =$request->get('name');
            $artist->a_age =$request->get('age');
            $artist->a_about =$request->get('about');
            // $artist->photo =$request->get('photo');
            $artist->save();
            return redirect()->back()->with('success','Category Updated Successfully');
        }
        //==============start save edited artist=====================
    
    
}
