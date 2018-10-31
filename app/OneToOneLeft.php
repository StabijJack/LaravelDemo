<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OneToOneLeft extends Model
{
    public function onetooneright(){
        return $this->belongsTo('App\OneToOneRight');
    }
}
