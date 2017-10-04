<?php

use App\BikeStation;
use App\Pedestrian;

Route::get('/', 'LayoutController@index');
Route::get('/example', 'LayoutController@example');

Route::get('/stations', 'BikeStationsController@index');
Route::get('/stations/{id}', 'BikeStationsController@show');
Route::get('/stations/api', 'BikeStationsController@getOpenBikeData');

Route::get('/pedestrians', 'PedestriansController@index');
Route::get('/pedestrians/{id}', 'PedestriansController@show');
Route::get('/pedestrians/api', 'PedestriansController@getOpenPedestrianData');
