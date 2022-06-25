@extends('order.layouts.mainOrder')
@section('container')

<div class="container mt-5 px-5">
    <div class="row">
        <div class="col-12">
                <p class="title-section-primary">Contact Detail</p>
            <form action="/order/review" method="GET" class="row g-3">
                <div class="p-2">
                    <div class="col-md-">
                        <label for="inputEmail4" class="font-sm font-bold">Full Name</label>
                        <input type="text" class="form-control" id="inputfullname" value="{{ auth()->user()->name }}" name="user_name" disabled>
                    </div>
                </div>
                <div class="p-2">
                    <div class="col-12">
                        <label for="inputAddress" class="font-sm font-bold">E-Mail</label>
                        <input type="email" class="form-control" id="inputEmail" value="{{ auth()->user()->email }}" name="user_email" disabled>
                    </div>
                </div>        
                <div class="pt-5">
                    <p class="title-section-primary">Passenger</p>
                    <div class="pt-3">
                        <p class="title-section-primary1">Passenger 1</p>
                    </div>
                        <div class="col-md-">
                            <label for="inputName" class="font-sm font-bold">Full Name</label>
                            <input type="text" class="form-control" id="inputfullname" name="passenger_name">
                        </div>
                        <div class="pt-3">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputCitizen" class="font-sm font-bold">Citizen Number</label>
                                    <input type="text" class="form-control" id="citizenNumber" name="passenger_citizen_id">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputNationality" class="font-sm font-bold">Nationality</label>
                                    <input type="text" class="form-control" id="inputNationality" name="passenger_nationality">
                                </div>
                            </div>
                        </div>

                        {{-- Button --}}
                        <div class="d-flex justify-content-end">
                            <input type="hidden" value="{{ $airline_selected }}" name="airline_selected">
                            <input type="hidden" value="{{ $class_flight_selected }}" name="class_flight_selected">
                            <input type="hidden" value="{{ $source_city_selected }}" name="source_city_selected">
                            <input type="hidden" value="{{ $dest_city_selected }}" name="dest_city_selected">
                            <input type="hidden" value="{{ $departure_date_selected }}" name="departure_date_selected">
                            <input type="hidden" value="{{ $departure_time_selected }}" name="departure_time_selected">
                            <input type="hidden" value="{{ $arrive_date_selected }}" name="arrive_date_selected">
                            <input type="hidden" value="{{ $arrive_time_selected }}" name="arrive_time_selected">
                            <input type="hidden" value="{{ $price_selected }}" name="price_selected">
                            <button type="submit" class="btn btn-red nav-fonts font-white font-bold mt-5">NEXT</button>
                        </div>
                </div>
            </form>
            <div class="d-flex justify-content-start">  
                <a href="{{ url()->previous() }}">
                    <button class="btn btn-red nav-fonts font-white font-bold mt-5">CANCEL</button>
                </a> 
            </div> 
        </div>
    </div>
</div>

@endsection