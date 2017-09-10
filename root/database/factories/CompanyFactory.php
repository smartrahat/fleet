<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Company::class, function (Faker\Generator $faker) {

    return [
        'name' => 'Web Point Ltd.',
        'address' => $faker->address,
        'city_id' => 1,
        'state_id' => 2,
        'country_id' => 1,
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->companyEmail,
        'logo' => 'logo.png',
        'favicon' => 'favicon.ico'
    ];
});