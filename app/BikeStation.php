<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BikeStation extends Model
{
    public function bikeCount($query)
    {
        return $query;//->count('nbbikes');
    }

    public function scopeEmpty($query)
    {
        return $query->where('nbbikes', 0);
    }

    public function scopeNotEmpty($query)
    {
        return $query->where('nbbikes', '>', 0);
    }
}
