<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public $timestamps = false;
    protected $table ='reservations';
    protected $fillable=['r_name','r_phone','r_email','e_id'];

    // RESERVATION USERS


    public function event (){
        return $this->belongsTo('App\Models\Event');
    }
    
}
