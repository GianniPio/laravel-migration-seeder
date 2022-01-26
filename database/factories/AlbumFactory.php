<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        
        'title' => $faker -> name(),
        'year' => $faker -> datetime(), 
        'sells' => $faker -> numberBetween(),
        'views' => $faker -> numberBetween(),

    ];
});
