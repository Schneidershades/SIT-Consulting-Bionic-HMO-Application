<?php

use App\Models\User;
use App\Models\Enrollee;
use Illuminate\\Str;
use Faker\Generator as Faker;

// $factory->define(User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'email_verified_at' => now(),
//         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//         'remember_token' => Str::random(10),
//     ];
// });
// 
// 
$factory->define(Enrollee::class, function (Faker $faker) {
    return [
        'identifier' => $faker->userName,
        'first_name' => $faker->userName,
        'middle_name' => $faker->userName,
        'last_name' => $faker->userName,
        'gender' => $faker->unique()->randomElement(['male', 'female']),
        'email' => $faker->unique()->safeEmail,
        'residential_address' => $faker->address,
        'residential_state' => $faker->address,
        'phone_number' => '080'.$faker->numberBetween(13301000, 90000000),
        'dob' => $faker->date,
        'occupation' => $faker->unique()->randomElement(['banker', 'lawyer', 'police']),
        'company' => $faker->userName,
        'company_sector' => $faker->userName,
        'nationality' => 'Nigerian',
        'parent_id' => $faker->unique()->randomElement([null, 5, 6, 19, 40, 23, 1, 43, 39, 32, 33, 23]),
    ];
});
