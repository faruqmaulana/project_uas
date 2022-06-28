@extends('layouts.main')
@section('container')


<!-- Jumbotrn Section -->
<section>
  <div class="jumbotron-box font-white">
    <div class="container">
      <h1 class="pt-5 font-bold jumbotron-font-title">Welcome to tiketku!</h1>
      <p class="jumbotron-text-box nav-fonts my-3">
      The need for cheap airline tickets is always sought after by anyone who wants to fly comfortably, including you. Moreover, currently transportation using airplanes has been chosen because of the convenience and speed of travel time. If you are one of the prospective passengers who are looking for cheap airline tickets or promo plane tickets, it is very appropriate for you to buy cheap airline tickets through tiketku. We have partnered with dozens of the best domestic and international airlines to provide your dream flight. You can check the list of cheap flight tickets to various flight routes at tiketku. Booking airline tickets is also easier because the innovation from tiketku is always oriented to the satisfaction of all valuable customers like you. You can check the list of cheap airline tickets to various flight routes directly at tiketku.
      </p>
      <a href="/flight">
        <button class="btn btn-red nav-fonts font-white font-bold" style="margin-top: 65px;">Book now</button>
      </a>
    </div>
  </div>
</section>
<!-- End of Jumbotron Section -->



<!-- Serve Section -->

<section class="mt-5 pt-5" id="serve">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-3 col-12">
            <div>
              <p class="title-section-primary">What we serve</p>
              <p class="title-section-secondary" style="width: 248px;">Top Values For You</p>
              <p class="font-sm">Variety of benefits you can get</p>
            </div> 
        </div>
        <div class="col-sm-9">
          <div class="d-flex justify-content-between">
            <div>
              <p class="font-lg font-bold">Lot Of Choices</p>
              <p class="font-sm" style="width: 168px;">Total 500+ destinations we work wth</p>
            </div>
            <div>
              <p class="font-lg font-bold">Easily Booking</p>
              <p class="font-sm" style="width: 168px;">Only one-step sign in to gets you flying high</p>
            </div>
            <div>
              <p class="font-lg font-bold">Money Back Guarantee</p>
              <p class="font-sm" style="width: 168px;">If you’re not satisified, you can contact our support to get your money back</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- End Of Serve Section -->


<!-- Destination Section -->

<section id="destination">
  <div class="container pt-5">
    <p class="title-section-primary">Destination</p>
    <p class="title-section-secondary">Our Top Destination</p>
    <div class="destination-box d-flex flex-wrap justify-content-between">
      <div href="#" class="img">
        <img src="assets/destinations/us.png" alt="" class="img-thumbnails">
        <p class="destination-font font-bold">U.S</p>
      </div>
      <div href="#" class="img">
        <img src="assets/destinations/france.png" alt="" class="img-thumbnails">
        <p class="destination-font font-bold">France</p>
      </div>
      <div href="#" class="img">
        <img src="assets/destinations/italy.png" alt="" class="img-thumbnails">
        <p class="destination-font font-bold">Italy</p>
      </div>
      <div href="#" class="img">
        <img src="assets/destinations/japan.png" alt="" class="img-thumbnails">
        <p class="destination-font font-bold">Japan</p>
      </div>
    </div>
  </div>
</section>

<!-- End Of Destination Section -->

<!-- Get Started -->
<div class="container">
  <div class="d-flex flex-column justify-content-center align-items-center">
    <p class="prepare-title text-center mt-5" style="width: 587px;">
      Prepare Yourself & Explore The Beauty Of the World
    </p>
    <p class="mt-3 mb-5">Let’s go abroad!</p>
    <a href="/flight" class="mb-5">
        <button class="btn btn-red font-md font-white font-bold" style="width: 146px;">GET STARTED</button>
    </a>
  </div>
</div>

<!-- End Of Get Started -->
@endsection