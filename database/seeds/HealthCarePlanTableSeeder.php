<?php

use Illuminate\Database\Seeder;
use App\Models\HealthCarePlan;

class HealthCarePlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = HealthCarePlan::create([
        	'hmo_id' => '45',
        	'plan' => 'Individual',
        	'parent_id' => NULL,
        	'amount' => 0,
        ]);

        $type = HealthCarePlan::create([
        	'hmo_id' => '45',
        	'plan' => 'Family',
        	'parent_id' => NULL,
        	'amount' => 0,
        ]);

        $type = HealthCarePlan::create([
        	'hmo_id' => '45',
        	'plan' => 'Coporate',
        	'parent_id' => NULL,
        	'amount' => 0,
        ]);

        $type = HealthCarePlan::create([
        	'hmo_id' => '45',
        	'plan' => 'RegiMax',
        	'parent_id' => 1,
        	'amount' => 1000,
        ]);

        $type = HealthCarePlan::create([
        	'hmo_id' => '45',
        	'plan' => 'RegiExec Mini',
        	'parent_id' => 1,
        	'amount' => 2000,
        ]);

        $type = HealthCarePlan::create([
        	'hmo_id' => '45',
        	'plan' => 'RegiExec Medi',
        	'parent_id' => 1,
        	'amount' => 3000,
        ]);

        $type = HealthCarePlan::create([
        	'hmo_id' => '45',
        	'plan' => 'RegiExec Max',
        	'parent_id' => 1,
        	'amount' => 4000,
        ]);


        $type = HealthCarePlan::create([
        	'hmo_id' => '45',
        	'plan' => 'RegiMax',
        	'parent_id' => 2,
        	'amount' => 10000,
        ]);

        $type = HealthCarePlan::create([
        	'hmo_id' => '45',
        	'plan' => 'RegiExec Mini',
        	'parent_id' => 2,
        	'amount' => 20000,
        ]);

        $type = HealthCarePlan::create([
        	'hmo_id' => '45',
        	'plan' => 'RegiExec Medi',
        	'parent_id' => 2,
        	'amount' => 30000,
        ]);

        $type = HealthCarePlan::create([
        	'hmo_id' => '45',
        	'plan' => 'RegiExec Max',
        	'parent_id' => 2,
        	'amount' => 40000,
        ]);



        $type = HealthCarePlan::create([
        	'hmo_id' => '45',
        	'plan' => 'Bronze',
        	'parent_id' =>3,
        	'amount' => 10000,
        ]);

        $type = HealthCarePlan::create([
        	'hmo_id' => '45',
        	'plan' => 'Silver',
        	'parent_id' =>3,
        	'amount' => 20000,
        ]);

        $type = HealthCarePlan::create([
        	'hmo_id' => '45',
        	'plan' => 'Gold',
        	'parent_id' =>3,
        	'amount' => 30000,
        ]);

        $type = HealthCarePlan::create([
        	'hmo_id' => '45',
        	'plan' => 'Super',
        	'parent_id' => 3,
        	'amount' => 40000,
        ]);

    }
}
