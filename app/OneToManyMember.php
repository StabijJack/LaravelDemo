<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OneToManyMember extends Model
{
    public function OneToManyOwner(){
        return $this->belongsTo('App\OneToManyOwner');
    }
}
