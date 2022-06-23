@extends('layouts.main')
@section('container')

<section>
    <div class="container mt-5 px-5">

        <div class="row">
            <div class="p-1">
                <p class="title-section-primary">Search</p>
            </div>
        </div>
        
        <form>
            <div class="d-flex align-items-center justify-content-between">
              <div class="p-4">
                  <label for="from" class="form-label font-md font-bold-xl">From</label>
                  <select class="form-select form-jkt font-md" id="from" aria-label=".form-jkt">
                    @foreach ($src_city as $src)
                        <option class="select-option" value="{{ $src->id }}" {{ $src->id === $data[0]->source_cities->id ? 'selected' : ''}} >{{ $src->source_city_name }}</option>
                    @endforeach
                  </select>
              </div>
                  <div class="p-1">
                  <label for="from" class="form-label font-md font-bold-xl">To</label>
                  <select class="form-select form-jkt font-md" id="from" aria-label=".form-jkt">
                    @foreach ($dst_city as $dst)
                        <option class="select-option" value="{{ $dst->id }}" {{ $dst->id === $data[0]->dest_cities->id ? 'selected' : ''}}>{{ $dst->dest_city_name }}</option>
                    @endforeach
                  </select>
              </div>
              <div class="p-1">
                  <label for="from" class="form-label font-md font-bold-xl">Departure Date</label>
                  <input placeholder="Selected date" type="date" id="date-picker-example" class="form-control datepicker" value="{{ $data[0]->departure_date }}">
              </div>
              <div class="p-1">
                  <label for="from" class="form-label font-md font-bold-xl">Seat Class</label>
                  <select class="form-select form-seatclass font-md" id="from" aria-label=".form-seatclass">
                      @foreach ($class_flight as $class)
                          <option class="select-option" value="{{ $class->id }}" {{ $class->id === $data[0]->class_flight_id ? 'selected' : '' }}>{{ $class->class_name }}</option>
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
        
        @foreach($data as $dat)
        <div class="container mb-4">
          <div class="card" style="border-radius: 30px">
            <div class="card-body px-4">
              <div class="row">

                <div class="col my-auto">
                  <div class="row">
                    <div class="col">
                      <p>
                        <span class="title-available font-bold">Airline</span><br><span class="h5 fw-bold">{{ $dat->airline->name }}</span>
                      </p> 
                    </div>
                    <div class="col">
                      <p>
                        <span class="title-available font-bold">Seat Class</span><br><span class="h5 fw-bold">{{ $dat->class_flight->class_name }}</span>
                      </p>                      
                    </div>
                  </div>
                </div>

                <div class="col-4 my-auto">
                  <div class="row text-center">
                    <div class="col my-auto">
                      <p class="my-auto">
                        <span class="h2 fw-bold">{{ substr($dat->departure_time, 0, -3) }}</span><br><span class="">{{ $dat->source_cities->source_city_name }}</span>
                      </p> 
                    </div>
                    <div class="col my-auto">
                      <p class="my-auto" style="font-weight: 500; font-size: 16px; line-height: 19px;">
                          <?php
                            $time1 = new DateTime($dat->depature_time);
                            $time2 = new DateTime($dat->arrive_time);
                            $time_diff = $time1->diff($time2);
                            echo $time_diff->h.'h';
                            echo $time_diff->i.'m';
                          ?>            
                        </p>
                      <img src="../assets/review/line.png" width="130px" alt="">
                      <img src="../assets/review/plane-icon.png" width="28px" alt="">                  
                    </div>
                    <div class="col my-auto">
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
                    <div class="col ">
                      <a href="#" class=" rounded-pill btn-md btn btn-outline-danger px-4 my-auto" tabindex="-1" role="button" aria-disabled="true" style="btn:hover{color: var(--white-color)}; width:120px">SELECT</a>
                    </div>                    
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>
</section>
@endsection