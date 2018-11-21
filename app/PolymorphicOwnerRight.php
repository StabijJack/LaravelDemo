<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ShiftOneLabs\LaravelCascadeDeletes\CascadesDeletes;

class PolymorphicOwnerRight extends Model
{
        use CascadesDeletes;
        
        protected $guarded = [];

    protected $cascadeDeletes = ['members'];
    
    public function members(){
        return $this->morphMany('App\PolymorphicMember','owner');
    }
}
