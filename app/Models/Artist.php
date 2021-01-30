<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public $timestamps = false;
    protected $table ='artists';
    protected $fillable=['a_name','a_age','a_about','a_photo','b_id'];
    protected $hidden =['b_id'];
    public static $photodirectory = 'photos/artists/';

    public function getPhoto(){
        if(!$this->a_photo){
            return '/photos/default.jpg';
        }else{
            return '/'.self::$photodirectory.$this->a_photo ;

        }
    }
    public function songs(){

        return $this->belongsToMany('App\Models\Song','artist_song',
            's_id','a_id','id','id') ;

    // $songs->artist
    }

    public function events(){

        return $this->belongsToMany('App\Models\Event','artist_event',
            'e_id','a_id','id','id') ;

    // $events->artist
    }

}
