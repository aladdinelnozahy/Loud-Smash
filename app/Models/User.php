<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;
    public $timestamps = false;

    protected $table ='users';
    protected $fillable=['u_username','u_name','u_email','u_phone'];
    protected $hidden =['u_pass' ,'r_id'];

    // public function getRoleAttribute ($value){
    //   return  $value = $this->u_role == 1 ? 'Super Admin' : 'Admin';
    // }
    public function reservation (){
        return $this->hasMany('App\Models\Reservation',);
    }
}
