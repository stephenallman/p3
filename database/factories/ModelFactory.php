<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(p3\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'address' => $faker->address,
        'image' => 'http://lorempixel.com/800/600/cats/'
        'catchprase' => $faker->catchPhrase,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
