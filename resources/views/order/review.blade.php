@extends('order.layouts.mainOrder')

@section('container')

<section>
  <div class="container mt-5 px-5">
    <div class="row">
      <div class="col-6">
        <!-- Contact Detail -->
        <p class="title-section-primary">Contact Detail</p>
        <div class="card" style="width: 33rem;">
          <ul class="list-group list-group-flush " >
            <li class="list-group-item" style="background-color: #D9D9D9">
              <p class="fw-bold h6">AGUSTINUS FRINSEN FARRELINO YOSES</p>
            </li>
            <li class="list-group-item" style="background-color: #D9D9D9">
              <div class="row">
                <div class="col-6">
                  <p class="fw-bold">E-mail</p>
                </div>
                <div class="col-6">
                  <p class="fw-bold">Phone Number</p>
                </div>
                <div class="col-6">
                  <p class="">frinsenfarrelino@gmail.com</p>
                </div>
                <div class="col-6">
                  <p class="">0888888122211221</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <!-- end Contact Detail -->

        <!-- Passenger Detail -->
        <p class="title-section-primary mt-5">Passenger Detail</p>
        <div class="card mb-4" style="width: 33rem;">
          <ul class="list-group list-group-flush " >
            <li class="list-group-item" style="background-color: #D9D9D9">
              <p class="fw-bold h6">AGUSTINUS FRINSEN FARRELINO YOSES</p>
            </li>
            <li class="list-group-item" style="background-color: #D9D9D9">
              <div class="row">
                <div class="col-6">
                  <p class="fw-bold">Citizens Number</p>
                </div>
                <div class="col-6">
                  <p class="fw-bold">Nationality</p>
                </div>
                <div class="col-6">
                  <p class="">123366858822939471</p>
                </div>
                <div class="col-6">
                  <p class="">Indonesia</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="card mb-4" style="width: 33rem;">
          <ul class="list-group list-group-flush " >
            <li class="list-group-item" style="background-color: #D9D9D9">
              <p class="fw-bold h6">JOSHUA ADRIAN MAULANA RONALDY</p>
            </li>
            <li class="list-group-item" style="background-color: #D9D9D9">
              <div class="row">
                <div class="col-6">
                  <p class="fw-bold">Citizens Number</p>
                </div>
                <div class="col-6">
                  <p class="fw-bold">Nationality</p>
                </div>
                <div class="col-6">
                  <p class="">355532124546754466</p>
                </div>
                <div class="col-6">
                  <p class="">Indonesia</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <!-- end Passenger Detail -->

        <div class="d-flex justify-content-start my-5">
          <a href="#">
            <img src="../assets/review/arrow-left.png" width="12px" alt="" class="d-inline">
            <p class="d-inline fw-bold ps-3">GO BACK</p>
          </a>
        </div>
      </div>

      <div class="col-5 offset-sm-1">
        <p class="title-section-primary">Order & Flight Detail</p>
        <div class="card" style="width: 100%;">
          <ul class="list-group list-group-flush " >
            <li class="list-group-item" style="background-color: #D9D9D9">

              <!-- Flight Detail -->
              <div class="row text-center  d-flex justify-content-between">
                <p class="fw-bold h5 text-center py-3">Flight Detail</p>
                <div class="col">
                  <p class="fw-bold">Jakarta <br> (JKT)</p>
                </div>
                <div class="col ">
                  <img src="../assets/review/plane-icon.png" width="28px" alt="" >
                  <img src="../assets/review/line.png" width="150px" alt="">
                </div>
                <div class="col">
                  <p class="fw-bold">Tokyo <br> (TKY)</p>
                </div>
              </div>

              <div class="row d-flex justify-content-between px-3">
                <div class="col-5">
                  <p class="fw-bold">Departure Date</p>
                </div>
                <div class="col-5">
                  <p class="text-end">2 June 2022</p>
                </div>
                <div class="col-5">
                  <p class="fw-bold">Departure Time</p>
                </div>
                <div class="col-5">
                  <p class="text-end">16:30</p>
                </div>
                <div class="col-5">
                  <p class="fw-bold">Arrive Time</p>
                </div>
                <div class="col-5">
                  <p class="text-end">18:20</p>
                </div>                
              </div>              
              <!-- end Flight Detail -->

              <!-- Order Detail -->
              <div class="row  d-flex justify-content-between my-5 px-3">
                <p class="fw-bold h5 text-center py-2 ">Order Detail</p>            
                <div class="col-5">
                  <p class="fw-bold">Air Asia (x2)</p>
                </div>
                <div class="col-5">
                  <p class="text-end">$400</p>
                </div>
                <div class="col-5">
                  <p class="fw-bold">Tax (10%)</p>
                </div>
                <div class="col-5">
                  <p class="text-end">$40</p>
                </div>
                <div class="col-6 mt-4">
                  <p class="fw-bold h5">Total Payment</p>
                </div>
                <div class="col-5 mt-4">
                  <p class=" fw-bold text-end h5 ">$440</p>
                </div>                
              </div>
              <!-- end Order Detail -->
            </li>                    
          </ul>
        </div>

        <div class="d-flex justify-content-end my-5">
          <button class="btn btn-red font-md font-white font-bold " style="width: 150px">BOOK NOW</button>
        </div>

      </div>
    </div>
  </div>
</section>

@endsection