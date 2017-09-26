<?php

namespace App\Http\Controllers;

use App\BikeStation;
use Illuminate\Http\Request;
use DB;

class BikeStationController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }
    //
    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    BB::insert();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BikeStation  $bikeStation
     * @return \Illuminate\Http\Response
     */
    public function show(BikeStation $bike_station)
    {
        $response = new BikeStation;
        //Move to the bike station model
        $station = DB::select('select * from bike_station where id = ?', $bike_station);

        foreach ($station as $key => $value) {
            echo '<p>'.$key.'</p>'.'<p> : '.$value.'</p>';
        }
        return redirect() view("index", compact('key'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\BikeStation  $bikeStation
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(BikeStation $bikeStation)
    // {
    //     //
    // }
    //
    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\BikeStation  $bikeStation
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, BikeStation $bikeStation)
    // {
    //     //
    // }
    //
    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\BikeStation  $bikeStation
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(BikeStation $bikeStation)
    // {
    //
    // }
}
