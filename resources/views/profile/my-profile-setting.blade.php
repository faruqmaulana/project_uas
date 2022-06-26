@extends('profile.layouts.main')

@section('container')
<div class="col">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item mb-4">
            <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button accordion-profile collapsed bg-gray-profile font-bold font-lg font-black" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Name
            </button>
            </h2>
            <div class="col">
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <form id="nameSubmit" method="POST" class="row mb-3 pt-2 flex-coloumn align-item-center">
                    @csrf {!! method_field('PUT') !!} 
                        <div class="col-5 py-3 pl-2" style="margin-top: 10px; margin-left: 15px;">
                            <input name="name" type="text" class="form-control border-dark ml-5" id="floatingInput" placeholder="Nama" style="height: 55px" required value="{{ auth()->user()->name }}">
                        </div>
                        <div class="col-2 py-3" style="margin-left: 35%; margin-top: 10px">
                            <button type="submit" class="btn btn-red font-md font-white font-bold update-name" style="width: 153px;">change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button accordion-profile collapsed bg-gray-profile font-bold font-lg font-black" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Change Password
            </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body accordion-setting">
                    <form id="passwordSubmit" method="POST" class="my-3">
                    @csrf {!! method_field('PUT') !!}
                        <input type="password" class="pass-btn" name="password" id="password" placeholder="Current Password" style="width: 352px;"/>
                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <input type="password" class="pass-btn" name="new_password" id="pass" placeholder="New Password" style="width: 352px;"/>
                                <i class="bi bi-eye-slash" id="togglePass"></i>
                            </div>
                            <button type="submit" class="btn btn-red font-md font-white font-bold update-password" style="width: 153px;">change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection