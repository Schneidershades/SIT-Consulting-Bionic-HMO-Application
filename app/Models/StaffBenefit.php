<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Staff;

class StaffBenefit extends Model
{
    public function staff()
    {
    	return $this->belongsto(Staff::class);
    }
}
