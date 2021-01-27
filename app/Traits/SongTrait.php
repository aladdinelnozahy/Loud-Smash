<?php

namespace App\Traits;
Trait SongTrait{
    function savephoto ($photo,$dist){
        $ext = $photo->getClientOriginalExtension();
        $filename =time().'.'.$ext;
        $path = $dist;
        $photo->move($path,$filename);
        return $filename;
    
    }

}
