<?php

use App\BikeStation;

Route::get('/', 'LayoutController@index');
Route::get('/example', 'LayoutController@example');

Route::get('/bikestations', 'BikeStationsController@index');
Route::get('/bikestations/{id}', 'BikeStationsController@show');
Route::get('/bike/api', 'BikeStationsController@getOpenBikeData');
