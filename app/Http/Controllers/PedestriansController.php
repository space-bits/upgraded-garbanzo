<?php

namespace App\Http\Controllers;

use App\Pedestrian;
use Iluminate\Http\Request;

class PedestriansController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ped = Pedestrian::all();
        return view('pedestrian.index',compact('ped'));
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
    public function counts()
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
    public function getOpenPedestrianData()
    {
        //https://stackoverflow.com/questions/6516902/how-to-get-response-using-curl-in-php#6518125
        $base_url = 'https://data.melbourne.vic.gov.au/resource/';
        $ped_url = 'cb85-mn2u.json';
        $year = '?year=2017&year=2018';

        $url = $base_url.$ped_url.$year;

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
        echo 'hi;';
        $peds = json_decode(curl_exec($ch), true);

        // for($i=0; $i < count($response_json); $i++){

            // foreach ($response_json[0] as $station) {
            //     if(isset($station) && !empty($station) && $station != null)
            //     {
                    // $peds[$i] = [
                    //     'id' => $response_json[$i]['id'],
                    //     'featurename' => $response_json[$i]['featurename'],
                    //     'nbbikes' => $response_json[$i]['nbbikes'],
                    //     'nbemptydoc' => $response_json[$i]['nbemptydoc'],
                    //     'terminalname' => $response_json[$i]['terminalname'],
                    //     'uploaddate' => $response_json[$i]['uploaddate']
                    // ];
            //     }
            // }
        // }
        /*

        */

        curl_close($ch);
        var_dump($peds);

        return view('pedestrians.api')
                ->with('peds', $peds);
    }
}
