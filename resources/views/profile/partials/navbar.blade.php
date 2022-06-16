<nav class="navbar navbar-expand-lg navbar-success py-2 sticky-top bg-white shadow">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="assets/logo.png" alt="" width="184" height="57">
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
            <a class="nav-link font-md font-regular {{$active === 'Flight' ? 'active' : ''}}" href="#">FLIGHTS</a>
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
      <div class="dropdown">
        <a class=" btn-secondary dropdown-toggle bg-white" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; font-size:1.5rem">
          <button class="btn btn-red font-md font-white font-bold mx-3">MR</button>
        </a>
    
        <ul class="dropdown-menu my-3" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
