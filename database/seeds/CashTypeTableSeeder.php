<?php

use Illuminate\Database\Seeder;
use App\Models\CashType;

class CashTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = CashType::create([
        	'name' => 'Income',
        ]);

        $type = CashType::create([
        	'name' => 'Expenditure',
        ]);
    }
}
