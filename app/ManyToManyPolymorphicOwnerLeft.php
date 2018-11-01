<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManyToManyPolymorphicOwnerLeft extends Model
{
    public function tags(){
        return $this->morphToMany('App\ManyToManyPolymorphicTag','many_to_many_polymorphic_pivot');
    }
}
