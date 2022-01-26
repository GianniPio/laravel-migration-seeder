<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [

        'name' => $faker ->name(),
        'surname' => $faker ->name(),
        'nickname' => $faker ->name(),
        'dataDinascita' => $faker -> dateTime(),
        'genre' => $faker ->name(),
        'website' => $faker ->url(),
        'instagram' => $faker ->username(),
    ];
});
