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

Route::get('/bikeStations', function() {

    $bikeStations = DB::table('bikeStations')->get();

    return view('bikeStations.index', compact('bikeStations'));
});

Route::get('/bikeStations/{bikeStation}', function($id) {

    $bikeStation = DB::table('bikeStations')->find($id);
    if($bikeStation != null){
        return view('bikeStations.show', compact('bikeStation'));
    } else {
        // Some error page resource not found or something
    }
});
