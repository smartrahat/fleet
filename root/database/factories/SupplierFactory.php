<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Supplier::class,function(Faker\Generator $faker){
    return [
        'company_id' => 1,
        'user_id' => 1,
        'name' => $faker->company,
        'supplier_name' => $faker->name(),
        'address' => $faker->streetAddress,
        'mobile' => $faker->phoneNumber,
        'email' => $faker->email,
    ];
});