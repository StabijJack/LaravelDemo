<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasManyThroughBottom extends Model
{
    public function hasManyThroughMiddle(){
        return $this->belongsTo('App\HasManyThroughMiddle');
    }    
}
