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
  
  <hr>
</div>


@endsection