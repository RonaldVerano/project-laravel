<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    public function employees()
    {
    	return $this->hasOne(Employees::class,'id');

        
    }

    public function getFullNameAttribute()
{
    return "$this->first_name $this->middle_name $this->last_name $this->age $this->address $this->cp_number $this->salaryeverypresent $this->dayspresent $this->salary";
}
}

