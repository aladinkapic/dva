<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model{
    protected $fillable = ['what', 'content', 'crated_at', 'updated_at', 'user_id'];
}
