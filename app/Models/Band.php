<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    public $timestamps = false;
    protected $table = 'bands';
    protected $filable =['b_name','b_memnum','b_createdyear','b_bio','b_location'];
}
