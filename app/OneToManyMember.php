<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OneToManyMember extends Model
{
    protected $guarded = [];

    public function oneToManyOwner(){
        return $this->belongsTo('App\OneToManyOwner');
    }
}
