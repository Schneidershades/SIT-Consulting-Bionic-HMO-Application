<?php

use Illuminate\Database\Seeder;
use App\Models\Rate;

class RatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rate = Rate::create([
            'name' => 'capitation',
        	'amount' => 750,
        	'period_applied' => 'monthly',
        ]);
    }
}
