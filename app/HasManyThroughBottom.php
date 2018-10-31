<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasManyThroughBottom extends Model
{
    public function hasmanythroughmiddle(){
        return $this->belongsTo('App\HasManyThroughBottom','App\HasManyThroughMiddle');
    }    
}
