<?php

use App\BikeStation;

Route::get('/', 'HomeController@index');

// Route::get('/', 'BikeStationsController@index');
Route::get('/bikeStations', 'BikeStationsController@index');
Route::get('/bikeStations/{id}', 'BikeStationsController@show');
