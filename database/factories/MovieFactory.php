<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        "name"=>$faker->bs,
        "year"=>$faker->year($max="now")
    ];
});
