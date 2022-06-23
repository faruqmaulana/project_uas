<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassFlight extends Model
{
    use HasFactory;

    public function flight_route()
    {
        return $this->hasOne(FlightRoute::class);
    }
}
