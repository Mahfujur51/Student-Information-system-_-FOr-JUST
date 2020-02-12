<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CseDepartment extends Model
{
    public function administration()
    {
        return $this->belongsTo('App\Administration','dept','dept');
    }
}
