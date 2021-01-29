<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $table ='categories';
    protected $fillable=['id','c_name'];
    // protected $hidden = ['created_at', 'updated_at'];       
    
    
    public function songs (){
        return $this->hasMany('App\Models\song');
    }
}
