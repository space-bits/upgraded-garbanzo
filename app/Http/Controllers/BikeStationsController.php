<?php

namespace App\Http\Controllers;

use App\BikeStation;
use Illuminate\Http\Request;
use DB;

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
        // DB::insert();
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

    /**
    *   Get the open data for bike stations
    *
    * @return \Illuminate\Http\Response
    **/
    public function getOpenBikeData()
    {
        $bikeStations = array();

        # https://stackoverflow.com/questions/6516902/how-to-get-response-using-curl-in-php#6518125
        $base_url = 'https://data.melbourne.vic.gov.au/resource/';
        $bike_url = 'qnjw-wgaj.json';
        $query = "";

        // Build query for the api call based on form
        if(!empty($_POST) && isset($_POST['year'])){
            $query = "?uploaddate=".$_POST['year'];
        }

        if(!empty($_POST) && isset($_POST['month'])){
            $query = $query."-".$_POST['month'];
        }

        if(!empty($_POST) && isset($_POST['mdate'])){
            $query = $query."-".$_POST['mdate']."T04:45:15.000";
        }

        $url = $base_url.$bike_url.$query;

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

        $response_json = json_decode(curl_exec($ch), true);

        // Error checking for curl get request.
        // if(emptyArray($response_json)) {
        //     return view('layouts.errors')
        //         -> with('errormsg', "Error! Invalid date selection.");
        // }

        for($i=0; $i < count($response_json); $i++){

            // foreach ($response_json[0] as $station) {
            //     if(isset($station) && !empty($station) && $station != null)
            //     {
                    $bikeStations[$i] = [
                        'id' => $response_json[$i]['id'],
                        'featurename' => $response_json[$i]['featurename'],
                        'nbbikes' => $response_json[$i]['nbbikes'],
                        'nbemptydoc' => $response_json[$i]['nbemptydoc'],
                        'terminalname' => $response_json[$i]['terminalname'],
                        'uploaddate' => $response_json[$i]['uploaddate']
                    ];
            //     }
            // }
        }
        /*
        Array
        (
            [0] => Array
            (
                [coordinates] => Array
                (
                    [type] => Point
                    [coordinates] => Array
                    (
                        [0] => 144.967814
                        [1] => -37.817523
                    )
                )
                [featurename] => Federation Square -
                                Flinders St / Swanston St - City
                [id] => 4
                [nbbikes] => 14
                [nbemptydoc] => 11
                [terminalname] => 60001
                [uploaddate] => 2017-09-29T11:15:06.000
            )
            ...
        )
        */

        curl_close($ch);

        return view('bikeStations.api')
                ->with('stations', $bikeStations);
    }

}
