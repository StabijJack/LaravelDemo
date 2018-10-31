<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OneToManyOwner extends Model
{
    public function onetomanymembers(){
        return $this->hasMany('App\OneToManyMember');
    }
}
