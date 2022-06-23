<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestCity extends Model
{
    use HasFactory;

    public function flight_route()
    {
        return $this->hasMany(FlightRoute::class);
    }
}
