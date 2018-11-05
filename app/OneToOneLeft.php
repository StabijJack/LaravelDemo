<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OneToOneLeft extends Model
{
    protected $guarded = [];

    public function one_to_one_right(){
        return $this->belongsTo('App\OneToOneRight');
    }
}
