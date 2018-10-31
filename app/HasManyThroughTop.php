<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasManyThroughTop extends Model
{
    public function hasmanythroughbottoms(){
        return $this->hasManyThrough('App\HasManyThroughBottom', 'App\HasManyThroughMiddle');
    }
    public function hasmanythroughmiddles(){
        return $this->hasMany('App\HasManyThroughMiddle');
    }
}
