<?php

use App\BikeStation;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/bikeStations', function() {

    $bikeStations = BikeStation::all();

    return view('bikeStations.index', compact('bikeStations'));
});

Route::get('/bikeStations/{bikeStation}', function($id) {

    $bikeStation = BikeStation::find($id);

    if($bikeStation != null){
        return view('bikeStations.show', compact('bikeStation'));
    } else {
        // Some error page resource not found or something
    }
});
