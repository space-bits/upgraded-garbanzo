<?php

use App\BikeStation;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/bikeStations', 'BikeStationsController@index');
Route::get('/bikeStations/{id}', 'BikeStationsController@show');
