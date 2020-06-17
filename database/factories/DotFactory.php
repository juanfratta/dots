<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dot;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Dot::class, function (Faker $faker) {
    return [
        'axis_x' => $faker->numberBetween(20, 1200),
        'axis_y' => $faker->numberBetween(20, 400,),
    ];
});