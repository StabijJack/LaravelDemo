<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManyToManyOwnerRight extends Model
{
    protected $guarded = [];

    public function manyToManyOwnerlefts(){
        return $this->belongsToMany('App\ManyToManyOwnerLeft','many_to_many_pivots')->withTimestamps()->withPivot('id','reden');
    }
}
