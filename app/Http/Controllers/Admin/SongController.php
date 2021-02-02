<?php

namespace App\Http\Controllers\Admin;

use App\Models\Song;
use App\Models\Category;
use App\Traits\PhotosTrait;
use Illuminate\Http\Request;
use App\Http\Requests\SongRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class SongController extends Controller
{
    use PhotosTrait;
    //==============start data view =====================

    public $timestamps = false;

    public function song (){
        $songs=Song::get();
        $cat = Category::get();
        return view ('admin.layout.songs',compact('songs'));
    }
    //==============end data view =====================

    //==============start song form =====================

    public function song_form (){
        $songs=Song::get();
        return view ('admin.dashforms.songform',compact('songs'));
    }
    //==============end song form =====================






    public function add_song (SongRequest $request){

    //==============start upload photo  ==================
      $filename =  $this->savePhoto($request->photo,Song::$photodirectory );
    //==============endadd upload photo  ======================

    //==============start add new song =====================

        Song::create([
            's_name' => $request->name ,
            's_author' => $request->author ,
            's_reldate' => $request->reldate ,
            's_photo' => $filename ,
            'b_id' =>'1'

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

    //==============start edit category=====================

    public function edit_song($id){
        $cat = Category::get();
        $song = song::find($id);
        $array=array('song'=>$song);
        if(!$song){
            return redirect()->route('admin.songs');
        }else{
            return view('admin.editforms.songedit',$array,compact('cat','song')) ;

        }
    }
    //==============start edit category=====================
    //==============start save edited category=====================

    public function update_song (Request $request,$id){

        $song =song::find($id);
        $song->s_name =$request->get('name');
        $song->s_author =$request->get('author');
        $song->s_reldate =$request->get('reldate');

        if ($request->photo) {
            $filename =$this->savePhoto($request->photo, Song::$photodirectory);
            $song->s_photo =$filename ;
            
        }

        $song->save();
        return redirect()->back()->with('success','Song Updated Successfully');
    }
    //==============start save edited category=====================
    //==============start search songs=====================
    public function search_song(Request $request){
       $data = '%'.$request ->k . '%';
       $songs =Song::where('s_name','like',$data)->get();
       if(isset($songs)&& $songs->count() > 0){

        foreach($songs as $song){
            echo" <p><a href='show-song-details/$song->id'>
                $song->s_name
            </a></p>";
        }
       }else{
           echo 'Not Found ... ';
       }
    }
    //==============endsearch songs=====================
    //==============start song details from link in search bar =====================
    public function song_details ($id){
        // return $id ;
        $song = song::find($id);
        return view('admin.layout.songdetails' , compact('song'));
    }
    //==============end song details from link in search bar =====================

}
