<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function ticket(){
        return $this->belongsto(Ticket::class);
    }

    public function flightRoute(){
        return $this->belongsTo(FlightRoute::class);
    }
}
