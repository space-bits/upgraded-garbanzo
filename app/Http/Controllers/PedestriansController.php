<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedestrianController extends Controller
{
    protected $base_url = 'https://data.melbourne.vic.gov.au/resource/';
    protected $ped_url = 'cb85-mn2u.json';

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
    public function show(Pedestrian $pedestrian)
    {
        return view('pedestrians.show', compact('pedestrian'));
    }

    /**
    *   Display counts at each station
    *
    *   @param  \App\BikeStation  $bikeStation
    *   @return \Illuminate\Http\Response
    **/
    public function counts(BikeStation $bikeStation)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BikeStation  $bikeStation
     * @return \Illuminate\Http\Response
     */
     public function edit(Pedestrian $ped)
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
    public function update(Request $request, Pedestrian $ped)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BikeStation  $bikeStation
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {

    }

    /**
    *   Get the open data for pedestrians
    *
    * @return \Illuminate\Http\Response
    **/
    public function getOpenPedData()
    {
        //https://stackoverflow.com/questions/6516902/how-to-get-response-using-curl-in-php#6518125

        $url = $base_url.$ped_url;

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

        */

        curl_close($ch);

        return view('bikeStations.api')
                ->with('stations', $bikeStations);
    }
}
