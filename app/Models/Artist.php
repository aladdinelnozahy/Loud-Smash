<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public $timestamps = false;
    protected $table ='artists';
    protected $fillable=['a_name','a_age','a_about'];
    // protected $hidden =['band_id'];
}
