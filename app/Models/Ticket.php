<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'source_city_id',
        'dest_city_id',
        'airline_id',
        'class_flight_id',
        'ticket_code',
        'departure_date',
        'departure_time',
        'arrive_date',
        'arrive_time',
        'passenger_name',
        'flight_number'
    ];

    public function airline()
    {
        return $this->belongsTo(Airline::class, 'airline_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
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
