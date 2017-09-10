<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Vehicle::class,function(Faker\Generator $faker){
    return [
        'company_id' => 1,
        'user_id' => 1,
        'name' => $faker->userName,
        'brand_id' => function(){
            return factory(App\Brand::class)->create()->id;
        },
        'type_id' => function(){
            return factory(App\Type::class)->create()->id;
        },
        'owner_id' => function(){
            return factory(App\Owner::class)->create()->id;
        },
        'roadPermitStart' => $faker->dateTimeBetween(),
        'roadPermitEnd' => $faker->dateTimeBetween(),
        'taxTokenStart' => $faker->dateTimeBetween(),
        'taxTokenEnd' => $faker->dateTimeBetween(),
        'insuranceStart' => $faker->dateTimeBetween(),
        'insuranceEnd' => $faker->dateTimeBetween(),
        'fitnessStart' => $faker->dateTimeBetween(),
        'fitnessEnd' => $faker->dateTimeBetween(),
        'regCardStart' => $faker->dateTimeBetween(),
        'regCardEnd' => $faker->dateTimeBetween(),
        'vehicleNo' => $faker->randomNumber(5),
        'engineNo' => $faker->randomDigit,
        'chasesNo' => $faker->randomDigit,
        'status_id' => function(){
            return factory(App\Status::class)->create()->id;
        },
        'image' => $faker->asciify('demo.png')
    ];
});