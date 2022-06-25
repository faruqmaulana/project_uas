@extends('profile.layouts.main')

@section('container')
      <!-- My Tickets Section -->
      <div class="col">        
        <h1 class="text-start fw-bold mb-5">My Tickets</h1>
        <div class="d-flex justify-content-around">
          <div class="col-sm-3 mx-3">
            <p class="font-lg font-bold">{{ $ticket->airline->name }}</p>
              <img src="../assets/flights/{{ $ticket->airline->logo }}" alt="" width="40%">
          </div>
          <div class="flex-grow-2 mx-3">
            <p class="font-md font-bold">{{ date("l, d M Y", strtotime($ticket->departure_date)) }}</p>
            <div>
      
            </div>
            <div class="d-flex mb-3">
              <div class="col-sm-1 justify-content-start me-5">
                <p class="fs-2 font-bold">{{ substr($ticket->departure_time, 0, -3) }}</p>
              </div> 
              <div class="ms-5">
                <p class="font-bold">{{ $ticket->source_cities->source_city_name }}</p>
                <p class="font-sm mt-0">{{ $ticket->source_cities->source_city_airport }}</p>
              </div>
            </div>
            <div class="d-flex">
              <div class="col-sm-1 justify-content-start me-5">
                <p class="fs-2 font-bold">{{ substr($ticket->arrive_time, 0, -3) }}</p>
              </div>
              <div class="ms-5">
                <p class="font-bold">{{ $ticket->dest_cities->dest_city_name }}</p>
                <p class="font-sm mt-0">{{ $ticket->dest_cities->dest_city_airport }}</p>
              </div>
            </div>
          </div>
          <div>
            <p class="font-lg font-bold mx-3">Ticket Code</p>
            <h2 class="font-lg font-bold" style="color: var(--red-color);">{{ $ticket->ticket_code }}</h2>
          </div>
        </div>
        <hr class="border-3">
        <div class="d-flex justify-content-between">
          <div class="d-flex">
            <img src="../assets/eticket/Identity.png" alt="" width="100px" height="50px">
            <p class="ms-4 me-4">Show your ticket and valid identity card in the airport</p>
          </div>
          <div>
            
          </div>
          <div class="d-flex">
            <img src="../assets/eticket/Check-in.png" alt="" width="100px" height="50px">
            <p class="ms-4 me-4">You must check-in atleast 90 minutes before departure</p>
          </div>
          <div class="d-flex">
            <img src="../assets/eticket/Information.png" alt="" width="100px" height="50px">
            <p class="ms-4">Time format is depending on the airport location</p>
          </div>
        </div>
        <hr>
        <p class="title-section-primary pt-2 mb-5">Passenger Detail</p>
        <div class="border border-secondary rounded-4">
          <div class="d-flex justify-content-center mt-4 mb-4 ms-4 me-4">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Passengers</th>
                  <th scope="col">Flight Number</th>
                  <th scope="col">Baggage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>{{ $ticket->passenger_name }}</td>
                  <td>{{ $ticket->flight_number }}</td>
                  <td>20kg</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div >
      <!-- end My Ticketss Section -->
@endsection