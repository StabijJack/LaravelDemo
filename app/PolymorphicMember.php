<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PolymorphicMember extends Model
{
    protected $guarded = [];

    public function owner(){
        return $this->morphTo();
    }
}
