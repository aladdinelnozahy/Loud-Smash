<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public $timestamps = false;
    protected $table ='songs';
    protected $fillable=['s_name','s_author','s_reldate'];
}