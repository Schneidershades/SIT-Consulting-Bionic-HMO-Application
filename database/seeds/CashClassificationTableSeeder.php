<?php

use Illuminate\Database\Seeder;
use App\Models\CashClassification;

class CashClassificationTableSeeder extends Seeder
{
    public function run()
    {
        $class = CashClassification::create([
        	'name' => 'Transportation',
        ]);

        $class = CashClassification::create([
        	'name' => 'Wages',
        ]);

        $class = CashClassification::create([
        	'name' => 'Salary',
        ]);

        $class = CashClassification::create([
            'name' => 'Utility',
        ]);

        $class = CashClassification::create([
            'name' => 'Taxes',
        ]);

        $class = CashClassification::create([
            'name' => 'Miscellenous',
        ]);

        $class = CashClassification::create([
            'name' => 'Security',
        ]);

        $class = CashClassification::create([
            'name' => 'Donations',
        ]);

        $class = CashClassification::create([
            'name' => 'Repairs and Maintenance',
        ]);

        $class = CashClassification::create([
            'name' => 'Cleaning and Refuse Collection',
        ]);

        $class = CashClassification::create([
            'name' => 'Surplus',
        ]);

        $class = CashClassification::create([
            'name' => 'Rent',
        ]);

        $class = CashClassification::create([
            'name' => 'Outsourced Project',
        ]);

        $class = CashClassification::create([
            'name' => 'Capitation',
        ]);

         $class = CashClassification::create([
            'name' => 'Claims/Bills',
        ]);
    }
}
