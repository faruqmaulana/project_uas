<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\ClassFlight;
use App\Models\SourceCity;
use App\Models\DestCity;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    //
    public function inputContact(Request $request)
    {
        //save selected ticket
        $airline_selected = $request->airline_id;
        $class_flight_selected = $request->class_flight_id;
        $source_city_selected = $request->source_city_id;
        $dest_city_selected = $request->dest_city_id;
        $departure_date_selected = $request->departure_date;
        $departure_time_selected = $request->departure_time;
        $arrive_date_selected = $request->arrive_date;
        $arrive_time_selected = $request->arrive_time;
        $price_selected = $request->price;
        $url = $request->url;

        if (Auth::check() == false) {
            return redirect('/login')->with('info', 'Please login first');
        }

        return view('order.contactpassenger', [
            'active' => 'Order',
            'airline_selected' => $airline_selected,
            'class_flight_selected' => $class_flight_selected,
            'source_city_selected' => $source_city_selected,
            'dest_city_selected' => $dest_city_selected,
            'departure_date_selected' => $departure_date_selected,
            'departure_time_selected' => $departure_time_selected,
            'arrive_date_selected' => $arrive_date_selected,
            'arrive_time_selected' => $arrive_time_selected,
            'price_selected' => $price_selected,
            'url' => $url
        ]);
    }

    public function orderReview(Request $request)
    {
        $airline_selected = $request->airline_selected;
        $class_flight_selected = $request->class_flight_selected;
        $source_city_selected = $request->source_city_selected;
        $dest_city_selected = $request->dest_city_selected;
        $departure_date_selected = $request->departure_date_selected;
        $departure_time_selected = $request->departure_time_selected;
        $arrive_date_selected = $request->arrive_date_selected;
        $arrive_time_selected = $request->arrive_time_selected;
        $price_selected = $request->price_selected;
        $price_plus_tax = $price_selected * 0.1;
        $passenger_name = $request->passenger_name;
        $passenger_citizen_id = $request->passenger_citizen_id;
        $passenger_nationality = $request->passenger_nationality;
        $total_payment = $price_selected + $price_plus_tax;


        $source_city_data = SourceCity::where([
            ['id', $source_city_selected]
        ])->get();

        $dest_city_data = DestCity::where([
            ['id', $dest_city_selected]
        ])->get();

        $class_flight_data = ClassFlight::where([
            ['id', $class_flight_selected]
        ])->get();

        $airline_data = Airline::where([
            ['id', $airline_selected]
        ])->get();

        return view('order.review', [
            'active' => 'Review',
            'airline_selected' => $airline_data,
            'class_flight_selected' => $class_flight_data,
            'source_city_selected' => $source_city_data,
            'dest_city_selected' => $dest_city_data,
            'departure_date_selected' => $departure_date_selected,
            'departure_time_selected' => $departure_time_selected,
            'arrive_date_selected' => $arrive_date_selected,
            'arrive_time_selected' => $arrive_time_selected,
            'price_selected' => $price_selected,
            'price_plus_tax' => $price_plus_tax,
            'passenger_name' => $passenger_name,
            'passenger_citizen_id' => $passenger_citizen_id,
            'passenger_nationality' => $passenger_nationality,
            'total_payment' => $total_payment
        ]);
    }

    public function eTicketCreate(Request $request)
    {
        // dd($request->passenger_name);


        $bytes = random_bytes(12);

        $ticket_random = Str::random(6);
        $flight_number_random = bin2hex($bytes);

        Ticket::create([
            'user_id' => auth()->user()->id,
            'source_city_id' => $request->source_city_selected,
            'dest_city_id' => $request->dest_city_selected,
            'airline_id' => $request->airline_selected,
            'class_flight_id' => $request->class_flight_selected,
            'ticket_code' => $ticket_random,
            'departure_date' => $request->departure_date_selected,
            'departure_time' => $request->departure_time_selected,
            'arrive_date' => $request->arrive_date_selected,
            'arrive_time' => $request->arrive_time_selected,
            'passenger_name' => $request->passenger_name,
            'flight_number' => $flight_number_random
        ]);

        return redirect('/order/eticket')->with('booked', 'Your ticket has been successfully booked!');
    }


    public function eTicket()
    {
        // dd($request->passenger_name);

        // dd(Ticket::all());

        $data = Ticket::where([
            ['user_id', auth()->user()->id]
        ])->latest()->get();

        return view('order.eticket', [
            'active' => 'E-Ticket',
            'data_ticket' => $data
        ]);
    }
}
