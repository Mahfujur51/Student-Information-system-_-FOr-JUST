<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
	protected $fillable = [
        'sname','sfname','smname','student_mobile','admission_roll','sboard_name','spass_year','sroll_no','sreg_no','sgroup','sgpa','hboard_name','hpass_year','hroll_no','hreg_no','hgroup','hgpa','m_position','session','gender','faculty','student_password',
    ];

     public function department()
    {
        return $this->hasMany('App\CseDepartment','dept','dept');
    }
     public function dean()
    {
        return $this->hasMany('App\Dean','faculty','faculty');
    }
     public function hall()
    {
        return $this->hasMany('App\FemaleHall','gender','gender');
    }

     
     

}
