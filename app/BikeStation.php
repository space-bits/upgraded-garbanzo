<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHTTP\Client;

class BikeStation extends Model
{


    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://data.melbourne.vic.gov.au/resource/qnjw-wgaj.json',
        // You can set any number of default request options.
        'timeout'  => 2.0,
    ]);

    $response = $client->request('GET', $client->base_uri);
    
    protected $id;
    protected $latitude;
    protected $longtitude;
    protected $featurename;
    protected $nbbikes;
    protected $nbemptydoc;
    protected $terminalname;
    protected $uploaddate;

    public function render() {
        $data = json_encode(array(
            'id'= $this->id,
            'latitude'= $this->latitude,
            'longtitude'= $this->longtitude,
            'featurename'= $this->featurename,
            'nbbikes'= $this->nbbikes,
            'nbemptydoc'= $this->nbemptydoc,
            'terminalname'= $this->,
            'uploaddate'= $this->uploaddate,
        ))

    }
}
