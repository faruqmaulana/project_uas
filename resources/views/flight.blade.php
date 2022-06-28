@extends('layouts.main')
@section('container')
<!-- test wsl on vsc -->

<section>
    <div class="container px-5">
        <div class="py-5">
            <p class="title-section-primary">Browse Flights</p>
            <p class="title-section-secondary">Where do you want to go?</p>
        </div>
        <form action="/flight/flight-search" method="GET">
            <div class="d-flex align-items-center justify-content-center">
                <div class="mb-3 col-3" style="margin-right: 10%">
                    <label for="from" class="form-label font-md font-bold-xl">From</label>
                    <select class="form-select form-select-lg font-md" id="from" aria-label=".form-select-lg example" name="source_id">
                        @foreach ($src_city as $src)
                            <option class="select-option" value="{{ $src->id }}">{{ $src->source_city_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col-3">
                    <label for="from" class="form-label font-md font-bold-xl">To</label>
                    <select class="form-select form-select-lg font-md" id="from" aria-label=".form-select-lg example" name="dest_id">
                        @foreach ($dst_city as $dst)
                            <option class="select-option" value="{{ $dst->id }}">{{ $dst->dest_city_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col-3" style="margin-left: 10%">
                    <div>
                        <label for="from" class="form-label font-md font-bold-xl">Departure Date</label>
                        <input placeholder="Selected date" type="date" id="date-picker-example" class="form-control datepicker" name="depart_date">
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center mt-3">
                <div class="mb-5">
                    <label for="from" class="form-label font-md font-bold-xl">Seat Class</label>
                    <select class="form-select form-select-lg font-md" id="from" aria-label=".form-select-lg example" name="class_id">
                        @foreach ($class_flight as $class)
                            <option class="select-option" value="{{ $class->id }}">{{ $class->class_name }}</option>
                        @endforeach
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
            <img class="flight-icons-japan" src="assets/flights/Japan.png" alt="">
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