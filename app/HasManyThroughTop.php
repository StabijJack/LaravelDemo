<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasManyThroughTop extends Model
{
    public function hasManyThroughBottoms(){
        return $this->hasManyThrough('App\HasManyThroughBottom', 'App\HasManyThroughMiddle');
    }
    public function hasManyThroughMiddles(){
        return $this->hasMany('App\HasManyThroughMiddle');
    }
}
