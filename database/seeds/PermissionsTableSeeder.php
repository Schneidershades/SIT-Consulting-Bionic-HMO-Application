<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        Permission::create([
    		'name'=> 'view assessments',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'edit assessments',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'delete assessments',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'create assessments',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

        Permission::create([
            'name'=> 'view agreements',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
        ]);

        Permission::create([
            'name'=> 'edit assessments',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
        ]);

        Permission::create([
            'name'=> 'delete assessments',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
        ]);

        Permission::create([
            'name'=> 'create assessments',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
        ]);

        Permission::create([
            'name'=> 'view agreements',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
        ]);

        Permission::create([
            'name'=> 'edit assessments',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
        ]);

        Permission::create([
            'name'=> 'delete assessments',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
        ]);

        Permission::create([
            'name'=> 'create assessments',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
        ]);


        Permission::create([
            'name'=> 'view enrollee transfer',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
        ]);

        Permission::create([
            'name'=> 'edit enrollee transfer',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
        ]);

        Permission::create([
            'name'=> 'delete enrollee transfer',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
        ]);

        Permission::create([
            'name'=> 'create enrollee transfer',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
        ]);

    	Permission::create([
    		'name'=> 'view bills',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'edit bills',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'delete bills',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'create bills',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'view bills',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'verify bills',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'verify claims',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'verify disbursments',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'verify data',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

        Permission::create([
            'name'=> 'view pending data',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
        ]);

        Permission::create([
            'name'=> 'view rejecting data',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
        ]);

        Permission::create([
            'name'=> 'view processing data',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
        ]);

    	Permission::create([
    		'name'=> 'delete bills',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'create bills',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'view capitations',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'edit capitations',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'delete capitations',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'create capitations',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'view cash',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'edit cash',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'delete cash',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'create cash',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'view claims',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'edit claims',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'delete claims',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'create claims',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'view encounters',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'edit encounters',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'delete encounters',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'create encounters',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'view enrollees',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'edit enrollees',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'delete enrollees',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'create enrollees',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'view hcps',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'edit hcps',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'delete hcps',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'create hcps',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'view health-care-plan',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'edit health-care-plan',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'delete health-care-plan',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'create health-care-plan',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'view staff',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'edit staff',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'delete staff',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'create staff',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'view HMO users',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'edit HMO users',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'delete HMO users',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

    	Permission::create([
    		'name'=> 'create HMO users',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
    	]);

        Permission::create([
            'name'=> 'create HCP users',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
        ]);

        Permission::create([
            'name'=> 'verify pre-authorization requests',
            'permissionable_type' => 'hmo',
            'permissionable_id' => 1,
        ]);

        
    }
}
