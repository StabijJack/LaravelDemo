<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasManyThroughMiddle extends Model
{
    public function hasManyThroughBottoms(){
        return $this->hasMany('App\HasManyThroughBottom');
    }
    public function hasManyThroughTop(){
        return $this->belongsTo(App\HasManyThroughTop);
    }
}
