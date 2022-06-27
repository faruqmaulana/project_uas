<?php
    $urlPath = $_SERVER["PHP_SELF"];
    // echo $urlPath;
    // dd($_SERVER);
?>

<nav class="navbar navbar-expand-lg navbar-success py-2 sticky-top bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{ $active === 'FlightSearch' ? '../assets/logo.png' : 'assets/logo.png'}}" alt="" width="184" height="57">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav gap-3">
        <li class="nav-item">
            <a class="nav-link font-md font-regular {{$active === 'Home' ? 'active' : ''}}" href="/">HOME</a>
        </li> 
        <li class="nav-item">
            <a class="nav-link font-md font-regular {{$active === 'Flight' || $active === 'FlightSearch' ? 'active' : ''}}" href="/flight">FLIGHTS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link font-md font-regular {{$active === 'About' ? 'active' : ''}}" href="/about">ABOUT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link font-md font-regular {{$active === 'Help' ? 'active' : ''}}" href="/help">HELP</a>
        </li>
        </ul>
    </div>
    <div class="collapse navbar-collapse justify-content-end flex-grow-0 gap-4" id="navbarNav">  
      @auth
      <div class="dropdown">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; font-size:1.5rem">
          <button class="btn btn-red font-md font-white font-bold mx-3" style="width: -webkit-fill-available;">{{ auth()->user()->name }}</button>
        </a>
    
        <ul class="dropdown-menu my-3" aria-labelledby="dropdownMenuLink">
          <li>
            <a class="dropdown-item" href="/my-profile">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-bottom: 3px; margin-right: 4px;">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>    
              Profile
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="/my-ticket">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ticket" viewBox="0 0 16 16" style="margin-bottom: 3px; margin-right: 4px;">
                <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z"/>
              </svg>
              Ticket
            </a>
          </li>
          <li>
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="dropdown-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16" style="margin-bottom: 3px; margin-right: 4px;">
                  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg>
                Logout
              </button>
            </form>
          </li>
        </ul>
      </div>
      @else
      <a href="/login" class="font-md font-black font-bold">
        Login
      </a>
      <a href="/registrasi">
        <button class="btn btn-red font-md font-white font-bold">Register</button>
      </a>
      @endauth
    </div>
  </div>
</nav>
