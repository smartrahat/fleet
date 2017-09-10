<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class,function(Faker\Generator $faker){

    static $password;

    $users = [
        [
            'company_id' => 1,
            'user_id' => null,
            'role_id' => 1,
            'name' => $faker->asciify('Mohammed Rahat Hossain'),
            'email' => 'smartrahat@gmail.com',
            'password' => $password ?: $password = bcrypt('instant'),
            'remember_token' => str_random(10)

        ],
        [
            'company_id' => 1,
            'user_id' => null,
            'role_id' => 1,
            'name' => $faker->asciify('Faisal Nur Roney'),
            'email' => 'md.faisalnur55@gmail.com',
            'password' => $password ?: $password = bcrypt('password'),
            'remember_token' => str_random(10)
        ]

    ];

    foreach($users as $user){
        return $user;
    }
});