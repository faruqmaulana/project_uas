@extends('order.layouts.mainOrder')

@section('container')

<div class="container">
  <p class="title-section-primary pt-5 text-center mb-5">E-Ticket</p>
  <div class="d-flex justify-content-around">
    <div class="col-sm-3 mx-3">
      <p class="font-lg font-bold">{{ $data_ticket[0]->airline->name }}</p>
      <img src="../assets/flights/{{ $data_ticket[0]->airline->logo }}" alt="" width="60%">
    </div>
    <div class="flex-grow-2 mx-3">
      <p class="font-md font-bold">{{ date("l, d M Y", strtotime($data_ticket[0]->departure_date)) }}</p>
      <div>

      </div>
      <div class="d-flex mb-3">
        <div class="col-sm-1 justify-content-start me-5">
          <p class="fs-2 font-bold">{{ substr($data_ticket[0]->departure_time, 0, -3) }}</p>
        </div> 
        <div class="ms-5">
          <p class="font-bold">{{ $data_ticket[0]->source_cities->source_city_name }}</p>
          <p class="font-sm mt-0">{{ $data_ticket[0]->source_cities->source_city_airport }}</p>
        </div>
      </div>
      <div class="d-flex">
        <div class="col-sm-1 justify-content-start me-5">
          <p class="fs-2 font-bold">{{ substr($data_ticket[0]->arrive_time, 0, -3) }}</p>
        </div>
        <div class="ms-5">
          <p class="font-bold">{{ $data_ticket[0]->dest_cities->dest_city_name }}</p>
          <p class="font-sm mt-0">{{ $data_ticket[0]->dest_cities->dest_city_airport }}</p>
        </div>
      </div>
    </div>
    <div class="d-flex align-items-center flex-column">
      <p class="font-lg font-bold mx-3">Ticket Code</p>
      <h2 class="font-xl font-bold" style="color: var(--red-color);">{{ $data_ticket[0]->ticket_code }}</h2>
    </div>
  </div>
  <hr class="border-3">
  <div class="d-flex justify-content-between py-2">
    <div class="d-flex">
      <img src="../assets/eticket/Identity.png" alt="" width="50px" height="45px">
      <p class="ms-4 p-0 m-0 me-4">Show your ticket and valid identity card in the airport</p>
    </div>
    <div>
      
    </div>
    <div class="d-flex">
      <img src="../assets/eticket/Check-in.png" alt="" width="50px" height="45px">
      <p class="ms-4 p-0 m-0 me-4">You must check-in atleast 90 minutes before departure</p>
    </div>
    <div class="d-flex">
      <img src="../assets/eticket/Information.png" alt="" width="50px" height="45px">
      <p class="ms-4 p-0 m-0">Time format is depending on the airport location</p>
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
            <th scope="col">Flight ID</th>
            <th scope="col">Baggage</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>{{ $data_ticket[0]->passenger_name }}</td>
            <td>{{ $data_ticket[0]->flight_number }}</td>
            <td>20kg</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="d-flex justify-content-center mt-5">
    <a href="/my-ticket">
      <button class="btn btn-red font-md font-white font-bold btn-search d-flex align-items-center justify-content-center">
        <span style="padding-left: 10px">
            GO TO MY TICKET
        </span>
      </button>
    </a>
  </div>

  <div class="d-flex justify-content-center mt-3 mb-5">
    <a href="/" class="mt-2 text-decoration-none text-black fw-semibold">BACK TO HOME</a>
  </div>

</div>

@endsection
