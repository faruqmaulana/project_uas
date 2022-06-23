<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightRoute extends Model
{
    use HasFactory;

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function airline()
    {
        return $this->belongsTo(Airline::class, 'airline_id');
    }

    public function source_cities()
    {
        return $this->belongsTo(SourceCity::class, 'source_city_id');
    }

    public function dest_cities()
    {
        return $this->belongsTo(DestCity::class, 'dest_city_id');
    }

    public function class_flight()
    {
        return $this->belongsTo(ClassFlight::class, 'class_flight_id');
    }
}
