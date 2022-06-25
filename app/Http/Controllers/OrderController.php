<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
    public function inputContact(Request $request)
    {
        //save selected ticket
        $airline_slctd = $request->airline_id;
        $class_flight_slctd = $request->class_flight_id;
        $source_city_slctd = $request->source_city_id;
        $dest_city_slctd = $request->dest_city_id;
        $departure_date_slctd = $request->departure_date;
        $departure_time_slctd = $request->departure_time;
        $arrive_date_slctd = $request->arrive_date;
        $arrive_time_slctd = $request->arrive_time;
        $price_slctd = $request->price;

        if (Auth::check() == false) {
            return redirect('/login')->with('info', 'Please login first');
        }

        return view('order.contactpassenger', [
            'active' => 'Order',
            'airline_slctd' => $airline_slctd,
            'class_flight_slctd' => $class_flight_slctd,
            'source_city_slctd' => $source_city_slctd,
            'dest_city_slctd' => $dest_city_slctd,
            'departure_date_slctd' => $departure_date_slctd,
            'departure_time_slctd' => $departure_time_slctd,
            'arrive_date_slctd' => $arrive_date_slctd,
            'arrive_time_slctd' => $arrive_time_slctd,
            'price_slctd' => $price_slctd
        ]);
    }

    public function orderReview()
    {
        return view('order.review', [
            'active' => 'Review'
        ]);
    }

    public function eTicket()
    {
        return view('order.eticket', [
            'active' => 'E-Ticket'
        ]);
    }
}
