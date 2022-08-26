<?php

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'type'                 	=> rand(1,2), 
        'name'             		=> $this->faker->name,
        'user'					=> $this->faker->unique()->userName,
        'password'             	=> bcrypt('secret'),
        'status'				=> 1
    ];
});
