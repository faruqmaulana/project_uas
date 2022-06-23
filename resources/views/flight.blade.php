@extends('layouts.main')
@section('container')

<section>
    <div class="container px-5">
        <div class="py-5">
            <p class="title-section-primary">Browse Flights</p>
            <p class="title-section-secondary">Where do you want to go?</p>
        </div>
        <form>
            <div class="d-flex align-items-center justify-content-center">
                <div class="mb-3 col-3" style="margin-right: 10%">
                    <label for="from" class="form-label font-md font-bold-xl">From</label>
                    <select class="form-select form-select-lg font-md" id="from" aria-label=".form-select-lg example">
                        <option class="select-option" value="1">Jakarta, Indonesia JKT</option>
                    </select>
                </div>
                <div class="mb-3 col-3">
                    <label for="from" class="form-label font-md font-bold-xl">To</label>
                    <select class="form-select form-select-lg font-md" id="from" aria-label=".form-select-lg example">
                        <option class="select-option" value="1">Tokyo, Japan</option>
                    </select>
                </div>
                <div class="mb-3 col-3" style="margin-left: 10%">
                    <div>
                        <label for="from" class="form-label font-md font-bold-xl">Departure Date</label>
                        <input placeholder="Selected date" type="date" id="date-picker-example" class="form-control datepicker">
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center mt-3">
                <div class="mb-5">
                    <label for="from" class="form-label font-md font-bold-xl">Seat Class</label>
                    <select class="form-select form-select-lg font-md" id="from" aria-label=".form-select-lg example">
                        <option class="select-option" value="1">Economy</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <button class="btn btn-red font-md font-white font-bold btn-search d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                    <span style="padding-left: 10px">
                        SEARCH FLIGHTS
                    </span>
                </button>
            </div>
        </form>
        <div class="pt-5">
            <p class="title-section-primary">Airline</p>
            <p class="title-section-secondary">Airlines We Collaborated With</p>
        </div>
        <div class="d-flex flex-wrap">
            <img class="flight-icons" src="assets/flights/AirAsia.png" alt="">
            <img class="flight-icons" src="assets/flights/Singapore.png" alt="">
            <img class="flight-icons" src="assets/flights/Qatar.png" alt="">
            <img class="flight-icons" src="assets/flights/Canada.png" alt="">
            <img class="flight-icons-japan" src="assets/flights/japan.png" alt="">
            <img class="flight-icons" src="assets/flights/Malaysia_Airlines.png" alt="">
            <img class="flight-icons" src="assets/flights/Cebu.png" alt="">
            <img class="flight-icons" src="assets/flights/Emirates.png" alt="">
            <img class="flight-icons" src="assets/flights/United.png" alt="">
            <img class="flight-icons" src="assets/flights/Saudi.png" alt="">
            <img class="flight-icons" src="assets/flights/Turkish.png" alt="">
        </div>
    </div>
</section>

@endsection