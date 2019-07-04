<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DiseaseClass;

class DiseaseClass extends Model
{
    public function children()
    {
    	return $this->hasMany(DiseaseClass::class, 'parent_id');
    }

    public function parent()
    {
    	return $this->belongsTo(DiseaseClass::class);
    }
}
