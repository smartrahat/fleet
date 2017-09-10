<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Owner::class,function(Faker\Generator $faker){
    return [
        'company_id' => 1,
        'user_id' => 1,
        'name' => $faker->name,
        'f_name' => $faker->name('male'),
        'address' => $faker->address,
        'nid_no' => $faker->bankAccountNumber,
        'email' => $faker->safeEmail,
        'mobile_no' => $faker->phoneNumber
    ];
});