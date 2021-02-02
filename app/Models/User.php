<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;
    public $timestamps = false;

    protected $table ='users';
    protected $fillable=['u_username','u_name','u_email','u_pass' ,'u_role','u_phone','u_photo'];

    public static $photodirectory = 'photos/users/';
    public function getPhoto(){
        if(!$this->u_photo){
            return '/photos/default.jpg';
        }else{
            return '/'.self::$photodirectory.$this->u_photo ;

        }
    }

    public function scopeInactive($q){
       return $q->where('status',);
    }
    // public function getRoleAttribute ($value){
    //   return  $value = $this->u_role == 1 ? 'Super Admin' : 'Admin';
    // }
    // public function reservation (){
    //     return $this->hasMany('App\Models\Reservation',);
    // }
}
