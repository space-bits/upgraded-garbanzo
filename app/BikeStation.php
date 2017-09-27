<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BikeStation extends Model
{
    public function bikeCount()
    {

    }

    public function hasBikes()
    {
        $this->bikeCount() > 0 ? true : false;
    }

    // public function
}
