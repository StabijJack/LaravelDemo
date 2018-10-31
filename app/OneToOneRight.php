<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OneToOneRight extends Model
{
    public function onetooneleft()
    {
        return $this->hasOne('App\OneToOneLeft');
    }
}
