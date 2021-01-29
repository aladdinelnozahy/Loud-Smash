<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Song;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index(){
        return view ('frontend.index');

    }

    public function show_songs(Request $request){
        $id = $request->id;
        $song = Song::where('b_id',$id)->get();
        if(isset($song)&& $song->count() > 0){
            foreach($song as $c)
                echo"<p><a href=''>$c->s_name</a></p>";
        }else{
            echo'not found';
        }

    }
}
 