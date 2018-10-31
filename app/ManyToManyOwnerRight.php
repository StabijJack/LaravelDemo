<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManyToManyOwnerRight extends Model
{
    public function ManyToManyOwnerlefts(){
        return $this->belongsToMany('App\ManyToManyOwnerLeft','many_to_many_pivots');
    }
}
