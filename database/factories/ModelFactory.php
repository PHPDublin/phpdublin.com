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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
<<<<<<< HEAD
        'email' => $faker->safeEmail,
=======
        'email' => $faker->email,
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
