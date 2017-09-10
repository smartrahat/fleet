<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Status::class,function(Faker\Generator $faker){
    return [
        'company_id' => 1,
        'user_id' => 1,
        'name' => $faker->word,
        'description' => $faker->sentence(10)
    ];
});