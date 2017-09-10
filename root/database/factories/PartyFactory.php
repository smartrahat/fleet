<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Party::class,function(Faker\Generator $faker){
   return [
       'company_id' => 1,
       'user_id' => 1,
       'name' => $faker->name,
       'contact_person' => $faker->firstName,
       'address' => $faker->address,
       'email' => $faker->safeEmail,
       'mobile' => $faker->phoneNumber
   ];
});