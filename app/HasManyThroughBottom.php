<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasManyThroughBottom extends Model
{
    public function hasmanythroughmiddletotop(){
        return $this->belongsTo('App\HasManyThroughBottom','App\HasManyThroughMiddle');
    }    
}
