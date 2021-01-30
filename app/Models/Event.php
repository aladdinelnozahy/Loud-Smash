<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps = false;
    protected $table ='events';
    protected $fillable= ['e_name','e_location','e_date','e_description','e_photo'];

    public function artists(){

        return $this->belongsToMany('App\Models\Artist','artist_event',
            'a_id','e_id','id','id') ;

    // $events->artist
    }
    // public function events(){

    //     return $this->belongsToMany('App\Models\Event','artist_event',
    //         'e_id','a_id','id','id') ;

    // // $events->artist
    // }
}
