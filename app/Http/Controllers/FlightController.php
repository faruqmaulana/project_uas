<?php

namespace App\Http\Controllers;

use App\Models\ClassFlight;
use App\Models\DestCity;
use Illuminate\Http\Request;
use App\Models\FlightRoute;
use App\Models\SourceCity;
use Carbon\Carbon;

class FlightController extends Controller
{
    //
    public function search()
    {
        $src_city = SourceCity::all();
        $dst_city = DestCity::all();
        $class_flight = ClassFlight::all();

        return view('flight', [
            'active' => 'Flight',
            'src_city' => $src_city,
            'dst_city' => $dst_city,
            'class_flight' => $class_flight
        ]);
    }

    public function filter(Request $request)
    {
        $src_city = SourceCity::all();
        $dst_city = DestCity::all();
        $class_flight = ClassFlight::all();

        $filter = FlightRoute::where([
            ['source_city_id', $request->source_id],
            ['dest_city_id', $request->dest_id],
            ['departure_date', $request->depart_date],
            ['class_flight_id', $request->class_id]
        ])->get();

        return view('flightSearch', [
            'src_city' => $src_city,
            'dst_city' => $dst_city,
            'class_flight' => $class_flight,
            'data' => $filter,
            'active' => 'Flight'
        ]);
    }


    public function index(Request $request)
    {
        dd($request->source_id);
    }
}
