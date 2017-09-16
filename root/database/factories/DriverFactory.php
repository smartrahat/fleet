<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Driver::class,function(Faker\Generator $faker){
    return [
        'company_id' => 1,
        'user_id' => 1,
        'name' => $faker->name,
        'f_name' => $faker->name('male'),
        'm_name' => $faker->name('female'),
        'pre_address' => $faker->streetAddress,
        'perm_address' => $faker->streetAddress,
        'nid' => $faker->bankAccountNumber,
        'd_licence' => $faker->creditCardNumber,
        'image' => $faker->asciify('null'),
        'mobile' => $faker->phoneNumber,
        'ref_name' => $faker->firstName,
        'app_person' => $faker->firstName
    ];
});