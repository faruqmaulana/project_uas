<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SourceCity extends Model
{
    use HasFactory;

    public function flight_route()
    {
        return $this->hasOne(FlightRoute::class);
    }

    public function ticket()
    {
        return $this->hasOne(Ticket::class);
    }
}
