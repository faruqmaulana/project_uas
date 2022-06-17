@extends('profile.layouts.main')

@section('container')
 <section>
  <div class="container mt-5 px-5">
    <div class="row">
      <div class="col-3">
        <h1 class="fw-bold h4">Muhammad Adrian Ronaldy</h1>
        <div class="navigate mt-5">
          <a href="/my-profile" class="btn  btn-lg mb-3 d-flex justify-content-start" tabindex="-1" role="button" aria-disabled="true" style="width:15rem; {{$tittle === 'My Profile' ? 'background-color:#ed1f24' : ''}}">
            <img src="assets/my-ticket/{{$tittle === 'My Profile' ? 'profile-white' : 'profile-black'}}.png" style="width: 35px" alt="" class="align-self-center">
            <p class="d-inline ms-3 my-1 align-self-center fw-bold {{$tittle === 'My Profile' ? 'text-white' : 'text-black'}}" style="font-size: 18px"><small class=""> My Profile</small></p>
          </a>
          <a href="/my-ticket" class="btn btn-danger btn-lg  mb-3 d-flex justify-content-start" tabindex="-1" role="button" aria-disabled="true" style="width: 15rem; {{$tittle === 'My Ticket' ? 'background-color:#ed1f24' : ''}} ">
            <img src="assets/my-ticket/{{$tittle === 'My Ticket' ? 'ticket-white' : 'ticket-black'}}.png" style="width: 35px"  alt="" class="align-self-center">
            <p class="d-inline ms-3 my-1 align-self-center fw-bold  {{$tittle === 'My Ticket' ? 'text-white' : 'text-black'}}" style="font-size: 18px"><small class=""> My Tickets</small></p>
          </a>

        </div>
      </div>
      <div class="col-sm-1" style="width: 3rem">
        <img src="assets/my-ticket/line-vertikal.png" alt="">
      </div>
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
            <a href="#" class="btn btn-default"  role="button" aria-disabled="true">              
              <img src="assets/my-ticket/trash.png" style="width: 30px"  alt="" class="align-self-center">          
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
            <a href="#" class="btn btn-default"  role="button" aria-disabled="true">              
              <img src="assets/my-ticket/trash.png" style="width: 30px"  alt="" class="align-self-center">          
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
            <a href="#" class="btn btn-default"  role="button" aria-disabled="true">              
              <img src="assets/my-ticket/trash.png" style="width: 30px"  alt="" class="align-self-center">          
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
            <a href="#" class="btn btn-default"  role="button" aria-disabled="true">              
              <img src="assets/my-ticket/trash.png" style="width: 30px"  alt="" class="align-self-center">          
            </a>
          </div>
        </div>

      </div >
      <!-- end My Tickets Section -->
    </div>
  </div>
 </section>
@endsection