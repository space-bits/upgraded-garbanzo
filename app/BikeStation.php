<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BikeStation extends Model
{
    public static bikeCounts()
    {
        return static::selectRaw(id, featurename, nbbikes)
        ->get()
        ->toArray();
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
