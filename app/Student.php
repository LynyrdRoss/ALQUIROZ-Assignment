<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function getFullName()
    {
    	return $this->first_name . ' ' . $this->last_name;
    }
}
