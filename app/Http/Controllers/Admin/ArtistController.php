<?php

namespace App\Http\Controllers\Admin;

use App\Models\Artist;
use App\Models\Song;
use App\Traits\PhotosTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArtistRequest;


class ArtistController extends Controller
{
    use PhotosTrait;
    public $timestamps = false;

    public function show_artist (){
        $artists=Artist::paginate(PAGINATE);
        $test = Artist::find('1');
        // dd($test->events()->first() );
        return view ('admin.layout.artists',compact('artists'));

    }

    public function artist_form (){
        return view ('admin.dashforms.artistform');
    }
    public function add_artist (ArtistRequest $request){
        // dd($request);
        //==============start photo validation=====================
       $filename = $this->savePhoto($request->photo , Artist::$photodirectory );
        //==============start photo validation=====================


        //==============start add new artist=====================
        Artist::create([
            'a_name' => $request ->name ,
            'a_age'=> $request ->age ,
            'a_about' => $request ->about,
            'a_photo'=>$filename
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
            if(!$artist){
                return redirect()->route('admin.artists');
            }else{
                return view('admin.editforms.artistedit', $array, compact('artist')) ;
            }
        }
        //==============start edit category=====================
        //==============start save edited artist=====================

        public function update_artist (Request $request,$id){

            $artist =artist::find($id);
            $artist->a_name =$request->get('name');
            $artist->a_age =$request->get('age');
            $artist->a_about =$request->get('about');
            if ($request->photo) {
                $filename =$this->savePhoto($request->photo, Artist::$photodirectory);
                $artist->a_photo =$filename ;
            }

            $artist->save();
            return redirect()->back()->with('success','Category Updated Successfully');
        }
        //==============start save edited artist=====================
        //==============start showing artist songs=====================

        public function show_artist_songs ($id){
            $artist =Artist::find($id) ;
            $songs = $artist->songs;
            $all_songs = Song::get();
        //    $test= Artist::with('songs')->ge 'id',$id)->get();
        //    dd($tru , $test);
        //    $try=$tru->relations->songs;
           //    $products = Artist::whereHas('songs', function($q) use ($id) {
        //     $q->where('id', $id);
        //  })->get();
            //  dd($tru , $test);

            return view ('admin.layout.artistsongs',compact('songs','artist','all_songs'));

        }
        //==============end showing artist songs=====================

        public function save_artist_songs (Request $request){
           $artist= Artist::find($request->artist_id);
        //    $artist->songs()->attatch($request->all_songs);
           $artist->songs()->syncWithoutDetaching($request->all_songs);
            // return $request ;
            return redirect()->back()->with('success','Songs Added Successflly To Artist');
        }
}
