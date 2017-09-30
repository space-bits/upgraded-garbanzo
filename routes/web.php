<?php

use App\BikeStation;

Route::get('/', 'LayoutController@index');
Route::get('/example', 'LayoutController@example');

Route::get('/bikestations', 'BikeStationsController@index');
Route::get('/bikestations/{id}', 'BikeStationsController@show');
Route::get('/bikes/api', 'BikeStationsController@getOpenBikeData');

Route::get('/pedestrians', 'pedestriansController@getOpenPedestrianData');
// Route::get('/pedestrians/{id}', 'pedestriansController@getOpenPedestrianData');
Route::get('/pedestrians/api', 'pedestriansController@getOpenPedestrianData');
