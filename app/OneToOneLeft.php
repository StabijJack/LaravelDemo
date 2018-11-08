<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OneToOneLeft extends Model
{
    protected $guarded = [];

    public function oneToOneRight()
    {
        return $this->belongsTo('App\OneToOneRight');
    }
}
