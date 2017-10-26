<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Parts::class,function(Faker\Generator $faker){
    return [
        'company_id' => 1,
        'user_id' => 1,
        'name' => $faker->word,
        'category_id' => $faker->numberBetween(1,3),
        'description' => $faker->sentence(10)
    ];
});