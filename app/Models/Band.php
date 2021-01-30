<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    public $timestamps = false;
    protected $table = 'bands';
    protected $fillable =[
        'b_name',
        'b_memnum',
        'b_createdyear',
        'b_bio','b_photo',
        'b_location'
    ];
    public static $photodirectory = 'photos/bands/';

    public function getPhoto(){
        if(!$this->b_photo){
            return '/photos/default.jpg';
        }else{
            return '/'.self::$photodirectory.$this->b_photo ;

        }
    }
}
