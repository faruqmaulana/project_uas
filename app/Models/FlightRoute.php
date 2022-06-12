<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightRoute extends Model
{
    use HasFactory;

    public function order(){
        return $this->hasMany(Order::class);
    }

    public function airline(){
        return $this->belongsToMany(Airline::class);
    }
}
