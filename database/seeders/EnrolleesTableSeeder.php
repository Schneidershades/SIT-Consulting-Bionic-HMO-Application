<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Enrollee;

class EnrolleesTableSeeder extends Seeder
{
    public function run()
    {
    	Enrollee::create([
    		'hmo_id'=>'45',
		    'hcp_id'=>'4084',
		    'health_plan_id'=> 5,
		    'first_name' => 'schneider',
		    'middle_name' => 'busayo',
		    'last_name' => 'komolafe',
		    'gender' => 'male',
		    'next_of_kin' => 'baxi',
		    'next_of_kin_relationship' => 'baxi',
		    'next_of_kin_address' => 'baxi',
		    'email' => 'buskome@yahoo.com',
		    'residential_address' => 'Abuja',
		    'residential_state' => 'Abuja',
		    'phone_number' => '3292892333',
		    'telephone_number' => '98932893233',
		    'genotype' => 'A',
		    'blood_group' => 'O+',
		    'occupation' => 'software',
		    'company' => 'sit consulting',
		    'company_sector' => 'software',
		    'nationality' => 'nigerian',
		    'parent_id' => null,
		    'operator_user_id' => 1,
    	]);
    }
}
