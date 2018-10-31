<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManyToManyOwnerLeft extends Model
{
    public function ManyToManyOwnerRights(){
        return $this->belongsToMany('App\ManyToManyOwnerRight','many_to_many_pivots');
    }
}
