<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password','image_profile_link','image_cover_link','pseudo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //id user en paramètre
    public function follow(){
        return $this->hasMany('App\Follow','user_id');
    }

    public function pint(){
        return $this->hasMany('App\Pint','user_id');
    }

    public function posts(){
        return $this->hasMany('App\Post','author_id');
    }
}
