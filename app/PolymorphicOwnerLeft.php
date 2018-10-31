<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PolymorphicOwnerLeft extends Model
{
    public function members(){
        return $this->morphMany('App\PolymorphicMember','owner');
    }
}