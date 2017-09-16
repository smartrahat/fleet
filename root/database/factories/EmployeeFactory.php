<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Employee::class,function(Faker\Generator $faker){
    return [
        'company_id' => 1,
        'user_id' => 1,
        'name' => $faker->name,
        'f_name' => $faker->name('male'),
        'm_name' => $faker->name('female'),
        'pre_address' => $faker->streetAddress,
        'perm_address' => $faker->streetAddress,
        'nid' => $faker->bankAccountNumber,
        'dob' => $faker->dateTimeBetween(60,20),
        'education' => $faker->word,
        'designation_id' => function(){
            return factory(App\Designation::class)->create()->id;
        },
        'image' => $faker->asciify('null'),
        'mobile' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'join_date' => $faker->dateTimeBetween(30),
        'app_person' => $faker->firstName
    ];
});