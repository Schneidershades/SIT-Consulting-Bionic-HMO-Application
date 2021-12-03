<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DiseaseClass;

class DiseaseClassesTableSeeder extends Seeder
{
    public function run()
    {
        DiseaseClass::create([
        	'description'=> 'malaria',
        ]);

        DiseaseClass::create([
        	'description'=> 'thyphoid',
        ]);
    }
}
