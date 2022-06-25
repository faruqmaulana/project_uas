@extends('profile.layouts.main')

@section('container')
      <!-- My Tickets Section -->
      <div class="col">        
      <h1 class="text-start fw-bold">My Tickets</h1>
      @if ($my_tickets->isEmpty())
        <div class="d-flex justify-content-center mt-5">
          <h5>You have no Ticket, let's search some flight</h5>
        </div>
        <div class="d-flex justify-content-center mt-5">
          <a href="/flight">
            <button class="btn btn-red font-md font-white font-bold btn-search d-flex align-items-center justify-content-center">
              <span style="padding-left: 10px">
                  SEARCH FLIGHT
              </span>
            </button>
          </a>
        </div>    
      @else
        @foreach ($my_tickets as $ticket)
        <div class="row mb-4">
          <div class="col">
            <div class="card" style="width: 100%;">
              <div class="card-body" style="background-color: #D9D9D9">
              <div class="row ">
    
                <div class="col d-flex flex-column" >              
                  <p class="my-auto mb-4">
                    <span class="fw-bold">Airlines</span> <br>
                    <small> {{ $ticket->airline->name }}</small>
                  </p>
                  <p class="my-auto">
                    <span class="fw-bold">Seat Class</span> <br>
                    <small> {{ $ticket->class_flight->class_name }}</small>
                  </p>
                </div>
    
                <div class="col d-flex flex-column">
                  <p class="my-auto mb-4">
                    <span class="fw-bold">From</span> <br>
                    <small>{{ $ticket->source_cities->source_city_name }}</small>
                  </p>
                  <p class="my-auto">
                    <span class="fw-bold">To</span> <br>
                    <small> {{ $ticket->dest_cities->dest_city_name }}</small>
                  </p>
                </div>
    
                <div class="col d-flex flex-column">
                  <p class="my-auto mb-4">
                    <span class="fw-bold">Departure Date</span> <br>
                    <small> {{ date("l, d M Y", strtotime($ticket->departure_date)) }}</small>
                  </p>
                  <p class="my-auto">
                    <span class="fw-bold">Arrive Date</span> <br>
                    <small>{{ date("l, d M Y", strtotime($ticket->arrive_date)) }}</small>
                  </p>
                </div>    
                <div class="col d-flex flex-column " >                  
                  <a href="/my-ticket/{{ $ticket->id }}" class="d-flex align-self-center rounded-pill btn-md btn btn-outline-danger px-4 my-auto" tabindex="-1" role="button" aria-disabled="true" style="btn:hover{color: var(--white-color)}; width:140px">Show Detail</a>
                </div>              
              </div>
              </div>
            </div>
          </div>
          <div class="col-1 my-auto" style="width: 1rem">
            <form action="{{ url('/my-ticket/'. $ticket->id .'/delete') }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-primary-outline" value="Delete">
                <img src="assets/my-ticket/trash.png" style="width: 30px"  alt="" class="align-self-center trash-btn">          
              </button>
            </form>
          </div>
        </div>
        @endforeach
      @endif
      <!-- end My Ticketss Section -->
@endsection