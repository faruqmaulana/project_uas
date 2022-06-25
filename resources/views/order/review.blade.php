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
              <p class="fw-bold h6">{{ auth()->user()->name }}</p>
            </li>
            <li class="list-group-item" style="background-color: #D9D9D9">
              <div class="row">
                <div class="col-2">
                  <p class="fw-bold">E-mail</p>
                </div>
                <div class="col-10">
                  <p class="">{{ auth()->user()->email }}</p>
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
              <p class="fw-bold h6">{{ $passenger_name }}</p>
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
                  <p class="">{{ $passenger_citizen_id }}</p>
                </div>
                <div class="col-6">
                  <p class="">{{ $passenger_nationality }}</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <!-- end Passenger Detail -->

        <div class="d-flex justify-content-start my-5">
          <a href="{{ url()->previous() }}">
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
                  <p class="fw-bold">{{ $source_city_selected[0]->source_city_name }}</p>
                </div>
                <div class="col ">
                  <img src="../assets/review/plane-icon.png" width="28px" alt="" >
                  <img src="../assets/review/line.png" width="150px" alt="">
                </div>
                <div class="col">
                  <p class="fw-bold">{{ $dest_city_selected[0]->dest_city_name }}</p>
                </div>
              </div>

              <br><br>
              <div class="row d-flex justify-content-between px-3">
                <div class="col-5">
                  <p class="fw-bold">Departure Date</p>
                </div>
                <div class="col-5">
                  <p class="text-end">{{ $departure_date_selected }}</p>
                </div>
                <div class="col-5">
                  <p class="fw-bold">Departure Time</p>
                </div>
                <div class="col-5">
                  <p class="text-end">{{ $departure_time_selected }}</p>
                </div>
                <div class="col-5">
                  <p class="fw-bold">Arrive Date</p>
                </div>
                <div class="col-5">
                  <p class="text-end">{{ $arrive_date_selected }}</p>
                </div>
                <div class="col-5">
                  <p class="fw-bold">Arrive Time</p>
                </div>
                <div class="col-5">
                  <p class="text-end">{{ $arrive_time_selected }}</p>
                </div>
                <div class="col-5">
                  <p class="fw-bold">Seat Class</p>
                </div>
                <div class="col-5">
                  <p class="text-end">{{ $class_flight_selected[0]->class_name }}</p>
                </div>                  
              </div>              
              <!-- end Flight Detail -->

              <!-- Order Detail -->
              <div class="row  d-flex justify-content-between my-5 px-3">
                <p class="fw-bold h5 text-center py-2 ">Order Detail</p>            
                <div class="col-5">
                  <p class="fw-bold">{{ $airline_selected[0]->name }}</p>
                </div>
                <div class="col-5">
                  <p class="text-end">{{ $price_selected }}</p>
                </div>
                <div class="col-5">
                  <p class="fw-bold">Tax (10%)</p>
                </div>
                <div class="col-5">
                  <p class="text-end">{{ $price_plus_tax }}</p>
                </div>
                <div class="col-6 mt-4">
                  <p class="fw-bold h5">Total Payment</p>
                </div>
                <div class="col-5 mt-4">
                  <p class=" fw-bold text-end h5 ">{{ $total_payment }}</p>
                </div>                
              </div>
              <!-- end Order Detail -->
            </li>                    
          </ul>
        </div>

        <div class="d-flex justify-content-end my-5">
          <form action="/order/eticket" method="POST">
            @csrf
            <input type="hidden" value="{{ $passenger_name }}" name="passenger_name">
            <input type="hidden" value="{{ $passenger_citizen_id }}" name="passenger_citizen_id">
            <input type="hidden" value="{{ $passenger_nationality }}" name="passenger_nationality">
            <input type="hidden" value="{{ $source_city_selected[0]->id }}" name="source_city_selected">
            <input type="hidden" value="{{ $dest_city_selected[0]->id }}" name="dest_city_selected">
            <input type="hidden" value="{{ $departure_date_selected }}" name="departure_date_selected">
            <input type="hidden" value="{{ $departure_time_selected }}" name="departure_time_selected">
            <input type="hidden" value="{{ $arrive_date_selected }}" name="arrive_date_selected">
            <input type="hidden" value="{{ $arrive_time_selected }}" name="arrive_time_selected">
            <input type="hidden" value="{{ $class_flight_selected[0]->id }}" name="class_flight_selected">
            <input type="hidden" value="{{ $airline_selected[0]->id }}" name="$airline_selected">
            <input type="hidden" value="{{ $price_selected }}" name="price_selected">
            <input type="hidden" value="{{ $price_plus_tax }}" name="price_plus_tax">
            <input type="hidden" value="{{ $total_payment }}" name="total_payment">
            <button type="submit" value="submit" class="btn btn-red font-md font-white font-bold " style="width: 150px">BOOK NOW</button>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>

@endsection