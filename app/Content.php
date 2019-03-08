<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;
class Content extends Model{
    public function image(){
        return $this->belongsTo('App\Image', 'image_one');
    }

    public function image2(){
        return $this->belongsTo('App\Image', 'image_two');
    }
}
