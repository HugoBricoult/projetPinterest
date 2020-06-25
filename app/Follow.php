<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = [
        'user_id','user_follow_id'
    ];

    public function posts(){
        return $this->hasMany('App\Posts');
    }
}

