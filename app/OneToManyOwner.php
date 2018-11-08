<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OneToManyOwner extends Model
{
    protected $guarded = [];

    public function oneToManyMembers(){
        return $this->hasMany('App\OneToManyMember');
    }
}
