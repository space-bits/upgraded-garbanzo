<?php

use App\BikeStation;

Route::get('/', 'HomeController@index');

Route::get('/bikestations', 'BikeStationsController@index');
Route::get('/bikestations/{id}', 'BikeStationsController@show');
Route::get('/bike/api', 'BikeStationsController@getOpenBikeData');
