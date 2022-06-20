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
            <div class="row justify-content-start">
                <div class="card" style="width:80rem;">
                    <div class="card-body">
                        <div class="row d-flex ">
                            <div class="col-2">
                                <h5 class="title-available font-bold">Airline</h5>
                            </div>
                            <div class="col-2">
                                <h5 class="title-available font-bold">Seat Class</h5>
                            </div>
                        </div>
                        <div class="row d-flex">
                            <div class="col-2">
                                <label for="airline" class="font-bold-xxl">Sriwijaya Air</label>
                            </div>
                            <div class="col-2">
                                <label for="airline" class="font-bold-xxl">Economy</label>
                            </div>
                        </div>
                        <div class="row d-flex col-10">
                            <div class="col-5">
                                <p class="text-end">16:30</p>              
                            </div>
                            <div class="col-2">              
                            <p class="text-end">1h50m</p>                
                            </div>
                            <div class="col-3">              
                            <p class="text-end">18:20</p>                
                            </div>
                        </div>
                        
                        <a class="d-flex justify-content-end" href="#" class="btn-select">Select</a>
                        
                        <div class="row d-flex col-10">               
                            <div class="col-5">                  
                                <img src="../assets/review/plane-icon.png" width="28px" alt="">                  
                                <img src="../assets/review/line.png" width="150px" alt="">                
                            </div>                
                            <div class="col-2">
                                <p class="fw-bold">Jakarta <br> (JKT)</p>
                            </div>
                            <div class="col-3">
                                <p class="fw-bold">Tokyo <br> (TKY)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Garuda Indonesia --}}
        <div class="container mb-4">
            <div class="row justify-content-start">
                <div class="card" style="width: 80rem;">
                    <div class="card-body">
                        <h5 class="title-available">Airline</h5>
                        <a class="d-flex justify-content-end" href="#" class="btn-select">Select</a>
                        <p class="card-text">Garuda Indonesia</p>
                    </div>               
                </div>
            </div>
        </div>

        {{-- Qatar Airways --}}
        <div class="container mb-4">
            <div class="row justify-content-start">
                <div class="card" style="width: 80rem;">
                    <div class="card-body">
                        <h5 class="title-available">Airline</h5>
                        <a class="d-flex justify-content-end" href="#" class="btn-select">Select</a>
                        <p class="card-text">Qatar Airways</p>
                    </div>
                </div>               
            </div>
        </div>

        {{-- Fly Emirates --}}
        <div class="container mb-4">
            <div class="row justify-content-start">
                <div class="card" style="width: 80rem;">
                    <div class="card-body">
                        <h5 class="title-available">Airline</h5>
                        <a class="d-flex justify-content-end" href="#" class="btn-select">Select</a>
                        <p class="card-text">Fly Emirates</p>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Air Asia --}}
        <div class="container mb-4">
            <div class="row justify-content-start">
                <div class="card" style="width: 80rem;">
                    <div class="card-body">
                        <h5 class="title-available">Airline</h5>
                        <a class="d-flex justify-content-end" href="#" class="btn-select">Select</a>
                        <p class="card-text">Air Asia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection