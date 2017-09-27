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
    return view('landingPage');
});

Route::get('/stations', function() {

    $stations = DB::table('bike_stations')->get();

    return view('stations.index', compact('stations'));
});

Route::get('/stations/{station}', function($id) {

    $station = DB::table('bike_stations')->find($id);

    return view('stations.show', compact('station'));
});
