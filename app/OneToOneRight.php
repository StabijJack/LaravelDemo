<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OneToOneRight extends Model
{
    protected $guarded = [];

    public function oneToOneLeft()
    {
        return $this->hasOne('App\OneToOneLeft');
    }
}
