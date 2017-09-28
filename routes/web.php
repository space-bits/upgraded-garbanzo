<?php

use App\BikeStation;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', 'BikeStationsController@index');
Route::get('/bikeStations', 'BikeStationsController@index');
Route::get('/bikeStations/{id}', 'BikeStationsController@show');
