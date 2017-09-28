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
        DB::insert();
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
    *   Display counts at each station
    *
    *   @param  \App\BikeStation  $bikeStation
    *   @return \Illuminate\Http\Response
    **/
    public function counts(BikeStation $bikeStation)
    {
        $bikeStations = BikeStation::bikeCounts();

        return view('bikeStations.counts', compact('bikeStations'));
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
        // $service_url = 'https://data.melbourne.vic.gov.au/resource/qnjw-wgaj.json';

        $url = 'https://data.melbourne.vic.gov.au/resource/qnjw-wgaj.json';

        $options = array(
            CURLOPT_RETURNTRANSFER => true,   // return web page
            CURLOPT_HEADER         => false,  // don't return headers
            CURLOPT_FOLLOWLOCATION => true,   // follow redirects
            CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
            CURLOPT_ENCODING       => "",     // handle compressed
            CURLOPT_USERAGENT      => "test", // name of client
            CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
            CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
            CURLOPT_TIMEOUT        => 120,    // time-out on response
        );

        $ch = curl_init($url);
        curl_setopt_array($ch, $options);

        $content  = curl_exec($ch);

        curl_close($ch);

        return view('bikeStations.api')->with('stations', $content);
    }
}
