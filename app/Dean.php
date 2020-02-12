<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dean extends Model
{

	
	 public function administration()
    {
        return $this->belongsTo('App\Administration','faculty','faculty');
    }
   
}
