<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManyToManyPivot extends Model
{
    protected $guarded = [];
    protected function manyToManyOwnerLeft(){
        return $this->belongsTo('App\ManyToManyOwnerLeft');
    }
    protected function manyToManyOwnerRight(){
        return $this->belongsTo('App\ManyToManyOwnerRight');
    }
}
