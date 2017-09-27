<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $dbQuery = ;
    $stations = [
        
    ];

    return view('landingPage', compact('names'));
});

Route::get('station', function() {
    return view('bikedata');
});

// Route::get('station/{[id]}', 'BikeStationController@show');
