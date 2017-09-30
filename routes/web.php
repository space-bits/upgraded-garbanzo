<?php

use App\BikeStation;

Route::get('/', 'LayoutController@index');
Route::get('/example', 'LayoutController@example');

Route::get('/stations', 'BikeStationsController@index');
Route::get('/station/{id}', 'BikeStationsController@show');
Route::get('/stations/api', 'BikeStationsController@getOpenBikeData');

Route::get('/pedestrians', 'pedestriansController@getOpenPedestrianData');
// Route::get('/pedestrians/{id}', 'pedestriansController@getOpenPedestrianData');
Route::get('/pedestrians/api', 'pedestriansController@getOpenPedestrianData');
