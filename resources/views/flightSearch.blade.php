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
                        <option class="select-option" value="1">Jakarta, Indonesia JKT</option>
                    </select>
                </div>
                    <div class="p-1">
                    <label for="from" class="form-label font-md font-bold-xl">To</label>
                    <select class="form-select form-jkt font-md" id="from" aria-label=".form-jkt">
                        <option class="select-option" value="1">Tokyo, Japan</option>
                    </select>
                </div>
                <div class="p-1">
                    <label for="from" class="form-label font-md font-bold-xl">Departure Date</label>
                    <input placeholder="Selected date" type="date" id="date-picker-example" class="form-control datepicker">
                </div>
                <div class="p-1">
                    <label for="from" class="form-label font-md font-bold-xl">No. Of Passengers</label>
                    <select class="form-select form-passanggers font-md" id="from" aria-label=".form-passanggers">
                    <option class="select-option" value="1">2</option>
                    </select>
                </div>
                <div class="p-1">
                    <label for="from" class="form-label font-md font-bold-xl">Seat Class</label>
                    <select class="form-select form-seatclass font-md" id="from" aria-label=".form-seatclass">
                        <option class="select-option" value="1">Economy</option>
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
        
        {{-- Sriwijaya Air --}}   
        <div class="container mb-4">
          <div class="card" style="border-radius: 30px">
            <div class="card-body px-4">
              <div class="row">

                <div class="col my-auto">
                  <div class="row">
                    <div class="col">
                      <p>
                        <span class="title-available font-bold">Airline</span><br><span class="h5 fw-bold">Sriwijaya Air</span>
                      </p> 
                    </div>
                    <div class="col">
                      <p>
                        <span class="title-available font-bold">Seat Class</span><br><span class="h5 fw-bold">Economy</span>
                      </p>                      
                    </div>
                  </div>
                </div>

                <div class="col-4 my-auto">
                  <div class="row text-center">
                    <div class="col my-auto">
                      <p class="my-auto">
                        <span class="h2 fw-bold">16:30</span><br><span class="">Jakarta(JKT)</span>
                      </p> 
                    </div>
                    <div class="col my-auto">
                      <p class="my-auto"><small>1h50m</small></p>
                      <img src="../assets/review/line.png" width="130px" alt="">
                      <img src="../assets/review/plane-icon.png" width="28px" alt="">                  
                    </div>
                    <div class="col my-auto">
                      <p class="my-auto">
                        <span class="h2 fw-bold">18:20</span><br><span class="">Tokyo(TKY)</span>
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
                      <p class="h2 fw-bold">$400</p>
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
       
        {{-- Garuda Indoensia --}}   
        <div class="container mb-4">
          <div class="card" style="border-radius: 30px">
            <div class="card-body px-4">
              <div class="row">

                <div class="col my-auto">
                  <div class="row">
                    <div class="col">
                      <p>
                        <span class="title-available font-bold">Airline</span><br><span class="h5 fw-bold">Garuda Indonesia</span>
                      </p> 
                    </div>
                    <div class="col">
                      <p>
                        <span class="title-available font-bold">Seat Class</span><br><span class="h5 fw-bold">Economy</span>
                      </p>                      
                    </div>
                  </div>
                </div>

                <div class="col-4 my-auto">
                  <div class="row text-center">
                    <div class="col my-auto">
                      <p class="my-auto">
                        <span class="h2 fw-bold">08:30</span><br><span class="">Jakarta(JKT)</span>
                      </p> 
                    </div>
                    <div class="col my-auto">
                      <p class="my-auto"><small>2h45m</small></p>
                      <img src="../assets/review/line.png" width="130px" alt="">
                      <img src="../assets/review/plane-icon.png" width="28px" alt="">                  
                    </div>
                    <div class="col my-auto">
                      <p class="my-auto">
                        <span class="h2 fw-bold">11:15</span><br><span class="">Tokyo(TKY)</span>
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
                      <p class="h2 fw-bold">$354</p>
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

        {{-- Qatar Airways --}}   
        <div class="container mb-4">
          <div class="card" style="border-radius: 30px">
            <div class="card-body px-4">
              <div class="row">

                <div class="col my-auto">
                  <div class="row">
                    <div class="col">
                      <p>
                        <span class="title-available font-bold">Airline</span><br><span class="h5 fw-bold">Qatar Airways</span>
                      </p> 
                    </div>
                    <div class="col">
                      <p>
                        <span class="title-available font-bold">Seat Class</span><br><span class="h5 fw-bold">Economy</span>
                      </p>                      
                    </div>
                  </div>
                </div>

                <div class="col-4 my-auto">
                  <div class="row text-center">
                    <div class="col my-auto">
                      <p class="my-auto">
                        <span class="h2 fw-bold">13:02</span><br><span class="">Jakarta(JKT)</span>
                      </p> 
                    </div>
                    <div class="col my-auto">
                      <p class="my-auto"><small>2h11m</small></p>
                      <img src="../assets/review/line.png" width="130px" alt="">
                      <img src="../assets/review/plane-icon.png" width="28px" alt="">                  
                    </div>
                    <div class="col my-auto">
                      <p class="my-auto">
                        <span class="h2 fw-bold">15:13</span><br><span class="">Tokyo(TKY)</span>
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
                      <p class="h2 fw-bold">$393</p>
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

        {{-- Fly Emirates --}}   
        <div class="container mb-4">
          <div class="card" style="border-radius: 30px">
            <div class="card-body px-4">
              <div class="row">

                <div class="col my-auto">
                  <div class="row">
                    <div class="col">
                      <p>
                        <span class="title-available font-bold">Airline</span><br><span class="h5 fw-bold">Fly Emirates</span>
                      </p> 
                    </div>
                    <div class="col">
                      <p>
                        <span class="title-available font-bold">Seat Class</span><br><span class="h5 fw-bold">Economy</span>
                      </p>                      
                    </div>
                  </div>
                </div>

                <div class="col-4 my-auto">
                  <div class="row text-center">
                    <div class="col my-auto">
                      <p class="my-auto">
                        <span class="h2 fw-bold">13:02</span><br><span class="">Jakarta(JKT)</span>
                      </p> 
                    </div>
                    <div class="col my-auto">
                      <p class="my-auto"><small>2h11m</small></p>
                      <img src="../assets/review/line.png" width="130px" alt="">
                      <img src="../assets/review/plane-icon.png" width="28px" alt="">                  
                    </div>
                    <div class="col my-auto">
                      <p class="my-auto">
                        <span class="h2 fw-bold">15:13</span><br><span class="">Tokyo(TKY)</span>
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
                      <p class="h2 fw-bold">$400</p>
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

        {{-- Air Asia --}}   
        <div class="container mb-4">
          <div class="card" style="border-radius: 30px">
            <div class="card-body px-4">
              <div class="row">

                <div class="col my-auto">
                  <div class="row">
                    <div class="col">
                      <p>
                        <span class="title-available font-bold">Airline</span><br><span class="h5 fw-bold">Air Asia</span>
                      </p> 
                    </div>
                    <div class="col">
                      <p>
                        <span class="title-available font-bold">Seat Class</span><br><span class="h5 fw-bold">Economy</span>
                      </p>                      
                    </div>
                  </div>
                </div>

                <div class="col-4 my-auto">
                  <div class="row text-center">
                    <div class="col my-auto">
                      <p class="my-auto">
                        <span class="h2 fw-bold">21:05</span><br><span class="">Jakarta(JKT)</span>
                      </p> 
                    </div>
                    <div class="col my-auto">
                      <p class="my-auto"><small>1h26m</small></p>
                      <img src="../assets/review/line.png" width="130px" alt="">
                      <img src="../assets/review/plane-icon.png" width="28px" alt="">                  
                    </div>
                    <div class="col my-auto">
                      <p class="my-auto">
                        <span class="h2 fw-bold">22:31</span><br><span class="">Tokyo(TKY)</span>
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
                      <p class="h2 fw-bold">$400</p>
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
    </div>
</section>
@endsection