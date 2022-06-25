@extends('layouts.main')
@section('container')
<?php
$urlPath = $_SERVER["REQUEST_URI"];
?>


<section>
    <div class="container mt-5 px-5">

        <div class="row">
            <div class="p-1">
                <p class="title-section-primary">Search</p>
            </div>
        </div>
        
        <form action="/flight/flight-search" method="GET">
            <div class="d-flex align-items-center justify-content-between">
              <div class="p-4">
                  <label for="from" class="form-label font-md font-bold-xl">From</label>
                  <select class="form-select form-jkt font-md" id="from" aria-label=".form-jkt" name="source_id">
                    @foreach ($src_city as $src)
                        <option class="select-option" value="{{ $src->id }}" {{ $src->id === $src_selected[0]->id ? 'selected' : ''}} >{{ $src->source_city_name }}</option>
                    @endforeach
                  </select>
              </div>
                  <div class="p-1">
                  <label for="from" class="form-label font-md font-bold-xl">To</label>
                  <select class="form-select form-jkt font-md" id="from" aria-label=".form-jkt" name="dest_id">
                    @foreach ($dst_city as $dst)
                        <option class="select-option" value="{{ $dst->id }}" {{ $dst->id === $dst_selected[0]->id ? 'selected' : ''}}>{{ $dst->dest_city_name }}</option>
                    @endforeach
                  </select>
              </div>
              <div class="p-1">
                  <label for="from" class="form-label font-md font-bold-xl">Departure Date</label>
                  <input placeholder="Selected date" type="date" id="date-picker-example" class="form-control datepicker" value="{{ $date_selected }}" name="depart_date">
              </div>
              <div class="p-1">
                  <label for="from" class="form-label font-md font-bold-xl">Seat Class</label>
                  <select class="form-select form-seatclass font-md" id="from" aria-label=".form-seatclass" name="class_id">
                      @foreach ($class_flight as $class)
                          <option class="select-option" value="{{ $class->id }}" {{ $class->id === $class_selected[0]->id ? 'selected' : '' }}>{{ $class->class_name }}</option>
                      @endforeach
                  </select>
              </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-red1 font-but font-white font-bold btn-redsearch d-flex align-items-center justify-content-center">
                    <span style="padding-left: 5px">SEARCH</span>            
                </button>                
            </div>
        </form>

        <div class="pt-5">   
            <p class="title-section-primary">Available Flights</p>        
        </div>
        @if ($data->isEmpty())
          <h3 class="text-center mt-5">There is no flight schedule that meets your filters</h3>
        @else 
          @foreach($data as $dat)
          <div class="container mb-4">
            <div class="card" style="border-radius: 30px">
              <div class="card-body px-4">
                <div class="row">

                    <div class="col my-auto">
                      <div class="row">
                        <div class="col">
                          <p>
                            <span class="title-available font-bold">Airline</span><br><span class="h5 fw-bold" name="airline">{{ $dat->airline->name }}</span>
                          </p> 
                        </div>
                        <div class="col">
                          <p>
                            <span class="title-available font-bold">Seat Class</span><br><span class="h5 fw-bold" name="class_name">{{ $dat->class_flight->class_name }}</span>
                          </p>                      
                        </div>
                      </div>
                    </div>

                    <div class="col-4 my-auto">
                      <div class="row text-center">
                        <div class="col my-auto">
                          <?= $dat->departure_date?>
                          <p class="my-auto">
                            <span class="h2 fw-bold">{{ substr($dat->departure_time, 0, -3) }}</span><br><span class="">{{ $dat->source_cities->source_city_name }}</span>
                          </p> 
                        </div>
                        <div class="col my-auto">
                          <p class="my-auto" style="font-weight: 500; font-size: 16px; line-height: 19px;">
                              <?php
                                $berangkat = new DateTime($dat->departure_date." ".$dat->departure_time);
                                $tiba = new DateTime($dat->arrive_date." ".$dat->arrive_time);
                                $time_diff = $berangkat->diff($tiba);

                                $flightDuration = $time_diff->h === 0 ? $time_diff->i.'m' : $time_diff->h.'h'.$time_diff->i.'m';
                                echo $flightDuration;
                              ?>            
                            </p>
                          <img src="../assets/review/line.png" width="130px" alt="">
                          <img src="../assets/review/plane-icon.png" width="28px" alt="">                  
                        </div>
                        <div class="col my-auto">
                        <?= $dat->arrive_date?>
                          <p class="my-auto">
                            <span class="h2 fw-bold">{{ substr($dat->arrive_time, 0, -3) }}</span><br><span class="">{{ $dat->dest_cities->dest_city_name }}</span>
                          </p> 
                        </div>
                      </div>
                    </div>

                    <div class="col-1 text-center">
                      <img src="../assets/review/line-vertikal.png" alt="" style="height: 8rem">
                    </div>

                    <div class="col-3 my-auto">
                      <div class="row justify-content-between">
                        <div class="col">
                          <p class="h2 fw-bold">${{ $dat->price }}</p>
                        </div>
                        <div class="col">
                            <form action="/order" method="GET" class="d-inline">
                              <input type="hidden" value="{{ $dat->airline_id }}" name="airline_id">
                              <input type="hidden" value="{{ $dat->class_flight_id }}" name="class_flight_id">
                              <input type="hidden" value="{{ $dat->source_city_id }}" name="source_city_id">
                              <input type="hidden" value="{{ $dat->dest_city_id }}" name="dest_city_id">
                              <input type="hidden" value="{{ $dat->departure_date }}" name="departure_date">
                              <input type="hidden" value="{{ $dat->departure_time }}" name="departure_time">
                              <input type="hidden" value="{{ $dat->arrive_date }}" name="arrive_date">
                              <input type="hidden" value="{{ $dat->arrive_time }}" name="arrive_time">
                              <input type="hidden" value="{{ $dat->price }}" name="price">
                              <input type="hidden" value="{{ $urlPath }}" name="url">
                            <button type="submit" class=" rounded-pill btn-md btn btn-outline-danger px-4 my-auto" tabindex="-1" role="button" aria-disabled="true" style="btn:hover{color: var(--white-color)}; width:120px">SELECT</button>
                          </form>
                        </div>                    
                      </div>
                    </div>

                </div>
              </div>
            </div>
          </div>
          @endforeach
        @endif
    </div>
</section>
@endsection