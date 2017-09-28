<?php

use Faker\Generator as Faker;
use App\BikeStation;

$factory->define(App\BikeStation::class, function (Faker $faker) {
    return [
            'longtitude'=>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 255),
            'latitude'=>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 255),
            'featurename'=>$faker->sentence,
            'id'=>$faker->numberBetween($min = 0, $max = 1000),
            'nbbikes'=>$faker->numberBetween($min = 0, $max = 1000),
            'nbemptydoc'=>$faker->numberBetween($min = 0, $max = 1000),
            'terminalname'=>$faker->numberBetween($min = 0, $max = 1000),
            'uploaddate'=>$faker->dateTime($max = 'now')
    ];
});
