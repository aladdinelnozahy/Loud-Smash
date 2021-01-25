<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
    protected $table ='users';
    protected $fillable=['u_username','u_name','u_email','u_phone'];
    protected $hidden =['u_pass' ,'r_id'];
}
