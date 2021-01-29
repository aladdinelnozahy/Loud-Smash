<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public $timestamps = false;
    protected $table ='songs';
    protected $fillable=['s_name','s_author','s_reldate','b_id'];

    public function categories(){
        return $this->belongsTo('App\Models\category','b_id','id');
    }

    public function artists(){
        return $this->belongsToMany('App\Models\Artist','artist_song',
                                    'a_id','s_id',
                                    'id','id');
    }

}
