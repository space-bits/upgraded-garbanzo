<?php

namespace App\Http\Controllers;

use App\BikeStation;
use Illuminate\Http\Request;

class BikeStationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Defined in BikeStation model
        $bikeStations = BikeStation::all();

        return view('bikeStations.index', compact('bikeStations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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
    public function show(BikeStation $bikeStation)
    {
        return view('bikeStations.show', compact('bikeStation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BikeStation  $bikeStation
     * @return \Illuminate\Http\Response
     */
    public function edit(BikeStation $bikeStation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BikeStation  $bikeStation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BikeStation $bikeStation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BikeStation  $bikeStation
     * @return \Illuminate\Http\Response
     */
    public function destroy(BikeStation $bikeStation)
    {

    }
}
