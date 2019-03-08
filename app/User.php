<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var arra y
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'address', 'user_image', 'facebook', 'linkedin', 'twitter', 'github', 'what'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function image(){
        return $this->belongsTo('App\Image', 'user_image');
    }
}
