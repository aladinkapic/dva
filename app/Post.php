<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    protected $fillable = ['what', 'content', 'crated_at', 'updated_at', 'user_id'];

    public function image($hash){
        // vrati nam sve slike od određenog posta
        return $this->hasOne('App\Image', 'hash', $hash);
    }
}
