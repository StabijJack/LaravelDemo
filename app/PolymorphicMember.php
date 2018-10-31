<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PolymorphicMember extends Model
{
    public function owner(){
        return $this->morphTo();
    }
}
