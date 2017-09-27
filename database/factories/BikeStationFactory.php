<?php

use Faker\Generator as Faker;

$factory->define(App\BikeStation::class, function (Faker $faker) {
    return [
        [
            {"coordinates":
                {"type":"Point","coordinates":[144.939521,-37.814022]},"featurename":"Harbour Town - Docklands Dve - Docklands","id":"2","nbbikes":"12","nbemptydoc":"8","terminalname":"60000","uploaddate":"2017-09-24T00:52:49.000"

    ];
});
