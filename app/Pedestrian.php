<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedestrian extends Model
{
    public function scopeEmpty($query)
    {
        return $query->where('', 0);
    }

    public function scopeNotEmpty($query)
    {
        return $query->where('', '>', 0);
    }
}
