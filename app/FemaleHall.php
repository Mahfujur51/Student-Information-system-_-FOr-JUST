<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FemaleHall extends Model
{
    //
     public function administration()
    {
        return $this->belongsTo('App\Administration','gender','gender');
    }
}
