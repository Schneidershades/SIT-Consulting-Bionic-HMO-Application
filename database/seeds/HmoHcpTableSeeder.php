<?php

use Illuminate\Database\Seeder;
use App\Models\HmoHcp;

class HmoHcpTableSeeder extends Seeder
{
    public function run()
    {
        HmoHcp::create([
        	'hmo_id'=> 45,
            'hcp_id' => 1,
        ]);

        HmoHcp::create([
        	'hmo_id'=> 45,
            'hcp_id' => 2,
        ]);

        HmoHcp::create([
        	'hmo_id'=> 45,
            'hcp_id' => 3,
        ]);

        HmoHcp::create([
        	'hmo_id'=> 45,
            'hcp_id' => 4,
        ]);

        HmoHcp::create([
        	'hmo_id'=> 45,
            'hcp_id' => 5,
        ]);

        HmoHcp::create([
        	'hmo_id'=> 45,
            'hcp_id' => 10,
        ]);

        HmoHcp::create([
        	'hmo_id'=> 45,
            'hcp_id' => 40,
        ]);

        HmoHcp::create([
        	'hmo_id'=> 45,
            'hcp_id' => 45,
        ]);

        HmoHcp::create([
        	'hmo_id'=> 45,
            'hcp_id' => 43,
        ]);

        HmoHcp::create([
        	'hmo_id'=> 45,
            'hcp_id' => 33,
        ]);

        HmoHcp::create([
        	'hmo_id'=> 45,
            'hcp_id' => 53,
        ]);

        HmoHcp::create([
        	'hmo_id'=> 45,
            'hcp_id' => 3000,
        ]);

    }
}
