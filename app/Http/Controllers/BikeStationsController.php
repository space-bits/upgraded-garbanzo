<?php

namespace App\Http\Controllers;

use App\BikeStation;
use Illuminate\Http\Request;

class BikeStationsController extends Controller
{
    protected $base_url = 'https://data.melbourne.vic.gov.au/resource/';
    protected $bike_url = 'qnjw-wgaj.json';

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
    //    DB::insert();
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

    public function getOpenBikeData()
    {
        $service_url = 'https://data.melbourne.vic.gov.au/resource/qnjw-wgaj.json';
        $curl = curl_init($service_url);

        $curl_response = curl_exec($curl);
        if($curl_response == false){
            $info = curl_getinfo($curl);
            curl_close($curl);
            die('Error occured during curl exec.
                Additional info: ' . var_export($info));
        }
        curl_close($curl);
        $decode = json_decode($curl_response);

        // if(isset($decode->response->status)
        //     && $decode->response->status == 'ERROR' ) {
        //         die('Error occured: ' . $decode->response->errormessage);
        // }

        return view('bikeStations.api')->with('stations', $decode);
    }
}
