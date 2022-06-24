@extends('order.layouts.mainOrder')
@section('container')

<div class="container mt-5 px-5">
    <div class="row">
        <div class="col-12">
                <p class="title-section-primary">Contact Detail</p>
            <form class="row g-3">
                <div class="p-2">
                    <div class="col-md-">
                        <label for="inputEmail4" class="font-sm font-bold">Full Name</label>
                        <input type="email" class="form-control" id="inputfullname">
                    </div>
                </div>
                <div class="p-2">
                    <div class="col-12">
                        <label for="inputAddress" class="font-sm font-bold">E-Mail</label>
                        <input type="text" class="form-control" id="inputEmail" placeholder="kamusiapa@gmail.com">
                    </div>
                </div>        
                <div class="pt-5">
                    <p class="title-section-primary">Passenger</p>
                    <div class="pt-3">
                        <p class="title-section-primary1">Passenger 1</p>
                    </div>
                        <div class="col-md-">
                            <label for="inputName" class="font-sm font-bold">Full Name</label>
                            <input type="email" class="form-control" id="inputfullname">
                        </div>
                        <div class="pt-3">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputCitizen" class="font-sm font-bold">Citizen Number</label>
                                    <input type="text" class="form-control" id="citizenNumber">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputNationality" class="font-sm font-bold">Nationality</label>
                                    <input type="text" class="form-control" id="inputNationality">
                                </div>
                            </div>
                        </div>

                        {{-- Button --}}
                        <div class="d-flex justify-content-end">
                                <a href="#">
                                <button class="btn btn-red nav-fonts font-white font-bold mt-5">NEXT</button>
                                </a>
                        </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection