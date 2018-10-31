<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasManyThroughMiddle extends Model
{
    public function hasmanythroughbottoms(){
        return $this->hasMany('App\HasManyThroughBottom');
    }
    public function hasmanythroughtop(){
        return $this->belongsTo(App\HasManyThroughTop);
    }
}
