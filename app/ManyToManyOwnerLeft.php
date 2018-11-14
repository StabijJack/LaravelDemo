<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManyToManyOwnerLeft extends Model
{
    protected $guarded = [];

    public function manyToManyOwnerRights(){
        return $this->belongsToMany('App\ManyToManyOwnerRight','many_to_many_pivots')->withTimestamps()->withPivot('id','reden');
    }
}
