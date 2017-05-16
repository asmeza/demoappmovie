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

use App\Models\User;
use App\Models\Movie;
use App\Models\MovieType;
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'gender'=>$faker->randomElement(['m','f']),
        'biography'=>$faker->text(rand(100,255)), // str_random(255)
        'remember_token' => str_random(10),

    ];
});


$factory->define(MovieType::class, function (Faker\Generator $faker) {

    return [
        'name' => str_random(10),
    ];
});

$factory->define(Movie::class, function (Faker\Generator $faker) {

    return [
        'name' => str_random(10),
        'movie_types_id' => $faker->randomElement([1,2,3,4,5]),
    ];
});
