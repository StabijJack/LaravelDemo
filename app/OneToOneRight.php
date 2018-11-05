<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OneToOneRight extends Model
{
    protected $guarded = [];

    public function one_to_one_left()
    {
        return $this->hasOne('App\OneToOneLeft');
    }
}
