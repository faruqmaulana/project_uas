<div class="container mt-5 px-5">
    <div class="row">
      <div class="col-3">
        <h1 class="fw-bold h4">Muhammad Adrian Ronaldy</h1>
        <div class="navigate mt-5">
          <a href="/my-profile" class="btn btn-lg mb-3 d-flex justify-content-start" tabindex="-1" role="button" aria-disabled="true" style="width:15rem; {{$tittle === 'My Profile' ? 'background-color:#ed1f24' : ''}}">
            <img src="assets/my-ticket/{{$tittle === 'My Profile' ? 'profile-white' : 'profile-black'}}.png" style="width: 35px" alt="" class="align-self-center">
            <p class="d-inline ms-3 my-1 align-self-center fw-bold {{$tittle === 'My Profile' ? 'text-white' : 'text-black'}}" style="font-size: 18px"><small class=""> My Profile</small></p>
          </a>
          <a href="/my-ticket" class="btn btn-lg  mb-3 d-flex justify-content-start" tabindex="-1" role="button" aria-disabled="true" style="width: 15rem; {{$tittle === 'My Ticket' ? 'background-color:#ed1f24' : ''}} ">
            <img src="assets/my-ticket/{{$tittle === 'My Ticket' ? 'ticket-white' : 'ticket-black'}}.png" style="width: 35px"  alt="" class="align-self-center">
            <p class="d-inline ms-3 my-1 align-self-center fw-bold  {{$tittle === 'My Ticket' ? 'text-white' : 'text-black'}}" style="font-size: 18px"><small class=""> My Tickets</small></p>
          </a>

        </div>
      </div>
      <div class="col-sm-1" style="width: 3rem">
        <img src="assets/my-ticket/line-vertikal.png" alt="">
      </div>
      @yield('container')
    </div>
</div>