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
        return $this->belongsToMany(Airline::class);
    }

    public function source_city()
    {
        return $this->belongsToMany(SourceCity::class);
    }

    public function dest_city()
    {
        return $this->belongsToMany(DestCity::class);
    }

    public function class_flight()
    {
        return $this->hasOne(ClassFlight::class);
    }
}
