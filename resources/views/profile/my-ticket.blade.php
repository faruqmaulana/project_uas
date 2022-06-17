@extends('profile.layouts.main')

@section('container')
      <!-- My Tickets Section -->
      <div class="col">        
      <h1 class="text-start fw-bold">My Tickets</h1>
        <div class="row mb-4">
          <div class="col">
            <div class="card" style="width: 100%;">
              <div class="card-body" style="background-color: #D9D9D9">
               <div class="row ">
    
                <div class="col d-flex flex-column" >              
                  <p class="my-auto mb-4">
                    <span class="fw-bold">Airlines</span> <br>
                    <small> Qatar Airways</small>
                  </p>
                  <p class="my-auto">
                    <span class="fw-bold">Seat Class</span> <br>
                    <small> Economy</small>
                  </p>
                </div>
    
                <div class="col d-flex flex-column">
                  <p class="my-auto mb-4">
                    <span class="fw-bold">From</span> <br>
                    <small>New York(NYC)</small>
                  </p>
                  <p class="my-auto">
                    <span class="fw-bold">To</span> <br>
                    <small> London(LON)</small>
                  </p>
                </div>
    
                <div class="col d-flex flex-column">
                  <p class="my-auto mb-4">
                    <span class="fw-bold">Departure Date</span> <br>
                    <small> Qatar Airways</small>
                  </p>
                  <p class="my-auto">
                    <span class="fw-bold">No. of Passengers</span> <br>
                    <small>2</small>
                  </p>
                </div>    
                <div class="col d-flex flex-column " >
                  {{-- <button type="button" class="d-flex align-self-center rounded-pill btn-md btn btn-outline-danger px-4 my-auto" style="btn:hover{color: var(--white-color)}; width:140px">Show Detail</button> --}}
                  <a href="#" class="d-flex align-self-center rounded-pill btn-md btn btn-outline-danger px-4 my-auto" tabindex="-1" role="button" aria-disabled="true" style="btn:hover{color: var(--white-color)}; width:140px">Show Detail</a>
                </div>              
               </div>
              </div>
            </div>
          </div>
          <div class="col-1 my-auto" style="width: 1rem">
            <a href="">
              <img src="assets/my-ticket/trash.png" style="width: 30px"  alt="" class="align-self-center trash-btn">          
            </a>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col">
            <div class="card" style="width: 100%;">
              <div class="card-body" style="background-color: #D9D9D9">
               <div class="row ">
    
                <div class="col d-flex flex-column" >              
                  <p class="my-auto mb-4">
                    <span class="fw-bold">Airlines</span> <br>
                    <small> Qatar Airways</small>
                  </p>
                  <p class="my-auto">
                    <span class="fw-bold">Seat Class</span> <br>
                    <small> Economy</small>
                  </p>
                </div>
    
                <div class="col d-flex flex-column">
                  <p class="my-auto mb-4">
                    <span class="fw-bold">From</span> <br>
                    <small>New York(NYC)</small>
                  </p>
                  <p class="my-auto">
                    <span class="fw-bold">To</span> <br>
                    <small> London(LON)</small>
                  </p>
                </div>
    
                <div class="col d-flex flex-column">
                  <p class="my-auto mb-4">
                    <span class="fw-bold">Departure Date</span> <br>
                    <small> Qatar Airways</small>
                  </p>
                  <p class="my-auto">
                    <span class="fw-bold">No. of Passengers</span> <br>
                    <small>2</small>
                  </p>
                </div>    
                <div class="col d-flex flex-column " >
                  <a href="#" class="d-flex align-self-center rounded-pill btn-md btn btn-outline-danger px-4 my-auto" tabindex="-1" role="button" aria-disabled="true" style="btn:hover{color: var(--white-color)}; width:140px">Show Detail</a>
                </div>              
               </div>
              </div>
            </div>
          </div>
          <div class="col-1 my-auto" style="width: 1rem">
            <a href="">
              <img src="assets/my-ticket/trash.png" style="width: 30px"  alt="" class="align-self-center trash-btn">          
            </a>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col">
            <div class="card" style="width: 100%;">
              <div class="card-body" style="background-color: #D9D9D9">
               <div class="row ">
    
                <div class="col d-flex flex-column" >              
                  <p class="my-auto mb-4">
                    <span class="fw-bold">Airlines</span> <br>
                    <small> Qatar Airways</small>
                  </p>
                  <p class="my-auto">
                    <span class="fw-bold">Seat Class</span> <br>
                    <small> Economy</small>
                  </p>
                </div>
    
                <div class="col d-flex flex-column">
                  <p class="my-auto mb-4">
                    <span class="fw-bold">From</span> <br>
                    <small>New York(NYC)</small>
                  </p>
                  <p class="my-auto">
                    <span class="fw-bold">To</span> <br>
                    <small> London(LON)</small>
                  </p>
                </div>
    
                <div class="col d-flex flex-column">
                  <p class="my-auto mb-4">
                    <span class="fw-bold">Departure Date</span> <br>
                    <small> Qatar Airways</small>
                  </p>
                  <p class="my-auto">
                    <span class="fw-bold">No. of Passengers</span> <br>
                    <small>2</small>
                  </p>
                </div>    
                <div class="col d-flex flex-column " >
                  <a href="#" class="d-flex align-self-center rounded-pill btn-md btn btn-outline-danger px-4 my-auto" tabindex="-1" role="button" aria-disabled="true" style="btn:hover{color: var(--white-color)}; width:140px">Show Detail</a>
                </div>              
               </div>
              </div>
            </div>
          </div>
          <div class="col-1 my-auto" style="width: 1rem">
            <a href="">
              <img src="assets/my-ticket/trash.png" style="width: 30px"  alt="" class="align-self-center trash-btn">          
            </a>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col">
            <div class="card" style="width: 100%;">
              <div class="card-body" style="background-color: #D9D9D9">
               <div class="row ">
    
                <div class="col d-flex flex-column" >              
                  <p class="my-auto mb-4">
                    <span class="fw-bold">Airlines</span> <br>
                    <small> Qatar Airways</small>
                  </p>
                  <p class="my-auto">
                    <span class="fw-bold">Seat Class</span> <br>
                    <small> Economy</small>
                  </p>
                </div>
    
                <div class="col d-flex flex-column">
                  <p class="my-auto mb-4">
                    <span class="fw-bold">From</span> <br>
                    <small>New York(NYC)</small>
                  </p>
                  <p class="my-auto">
                    <span class="fw-bold">To</span> <br>
                    <small> London(LON)</small>
                  </p>
                </div>
    
                <div class="col d-flex flex-column">
                  <p class="my-auto mb-4">
                    <span class="fw-bold">Departure Date</span> <br>
                    <small> Qatar Airways</small>
                  </p>
                  <p class="my-auto">
                    <span class="fw-bold">No. of Passengers</span> <br>
                    <small>2</small>
                  </p>
                </div>    
                <div class="col d-flex flex-column " >
                  <a href="#" class="d-flex align-self-center rounded-pill btn-md btn btn-outline-danger px-4 my-auto" tabindex="-1" role="button" aria-disabled="true" style="btn:hover{color: var(--white-color)}; width:140px">Show Detail</a>
                </div>              
               </div>
              </div>
            </div>
          </div>
          <div class="col-1 my-auto" style="width: 1rem">
            <a href="">
              <img src="assets/my-ticket/trash.png" style="width: 30px"  alt="" class="align-self-center trash-btn">          
            </a>
          </div>
        </div>
      </div >
      <!-- end My Tickets Section -->
@endsection