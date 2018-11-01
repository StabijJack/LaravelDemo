<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManyToManyPolymorphicTag extends Model
{
    public function ManyToManyPolymorphicOwnerLefts()
    {
        return $this->morphedByMany('App\ManyToManyPolymorphicOwnerLeft', 'many_to_many_polymorphic_pivot');
    }
    public function ManyToManyPolymorphicOwnerRights()
    {
        return $this->morphedByMany('App\ManyToManyPolymorphicOwnerRight', 'many_to_many_polymorphic_pivot');
    }
}