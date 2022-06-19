@extends('order.layouts.mainOrder')

@section('container')

<div class="container">
  <p class="title-section-primary pt-5 text-center mb-5">E-Ticket</p>
  <div class="d-flex justify-content-around">
    <div class="col-sm-3 mx-3">
      <p class="font-lg font-bold">Air Asia</p>
        <img src="../assets/flights/AirAsia.png" alt="" width="30%">
      <p class="font-sm mt-3">FN-003</p>
    </div>
    <div class="flex-grow-2 mx-3">
      <p class="font-md font-bold">Thursday, 2 June 2022</p>
      <div>

      </div>
      <div class="d-flex mb-3">
        <div class="col-sm-1 justify-content-start me-5">
          <p class="fs-2 font-bold">16.30</p>
        </div> 
        <div class="ms-5">
          <p class="font-bold">Jakarta (JKT)</p>
          <p class="font-sm mt-0">Soekarno Hatta International Airport</p>
        </div>
      </div>
      <div class="d-flex">
        <div class="col-sm-1 justify-content-start me-5">
          <p class="fs-2 font-bold">18.20</p>
        </div>
        <div class="ms-5">
          <p class="font-bold">Tokyo (TKY)</p>
          <p class="font-sm mt-0">Haneda International Airport</p>
        </div>
      </div>
    </div>
    <div>
      <p class="font-lg font-bold mx-3">Ticket Code</p>
      <h2 class="font-xl font-bold" style="color: var(--red-color);">T-01231</h2>
    </div>
  </div>
  <hr class="border-3">
  <div class="d-flex justify-content-between">
    <div class="d-flex">
      <img src="../assets/eticket/Identity.png" alt="" width="100px">
      <p class="ms-4 me-4">Show your ticket and valid identity card in the airport</p>
    </div>
    <div>
      
    </div>
    <div class="d-flex">
      <img src="../assets/eticket/Check-in.png" alt="" width="100px">
      <p class="ms-4 me-4">You must check-in atleast 90 minutes before departure</p>
    </div>
    <div class="d-flex">
      <img src="../assets/eticket/Information.png" alt="" width="100px">
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
            <td>Agustinus Frinsen Farrelino Yoses</td>
            <td>FN-003</td>
            <td>20kg</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Joshua Adrian Maulana Ronaldy</td>
            <td>FN-003</td>
            <td>20kg</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="d-flex justify-content-center mt-5">
    <button class="btn btn-red font-md font-white font-bold btn-search d-flex align-items-center justify-content-center">
      <span style="padding-left: 10px">
          GO TO MY TICKET
      </span>
    </button>
  </div>

  <div class="d-flex justify-content-center mt-3 mb-5">
    <a href="" class="mt-2 text-decoration-none text-black fw-semibold">BACK TO HOME</a>
  </div>

</div>

@endsection
