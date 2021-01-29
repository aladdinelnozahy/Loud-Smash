<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps = false;
    protected $table ='events';
    protected $fillable=['e_name','e_date','e_location','e_description'];
   
   
   
    // public function reservation (){
    //     return $this->belongsTo('App\Models\User','r_id','id');
    // }
}
