@extends('profile.layouts.main')

@section('container')
<div class="col">
    <form action="">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item mb-4">
                <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button accordion-profile collapsed bg-gray-profile font-bold font-lg font-black" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Name
                </button>
                </h2>
                <div class="col">
                    <div class="col">
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="row mb-3 pt-2 flex-coloumn align-item-center">
                            <div class="col-5 py-3 pl-2" style="margin-top: 10px; margin-left: 15px;">
                                <input name="email" type="email"  class="form-control border-dark ml-5" id="floatingInput" placeholder="Nama" style="height: 55px" required autofocus>
                            </div>
                            <div class="col-2 py-3" style="margin-left: 35%; margin-top: 10px">
                                <button type="submit" class="btn btn-red font-md font-white font-bold" style="width: 153px;">ganti</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button accordion-profile collapsed bg-gray-profile font-bold font-lg font-black" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Ubah Kata Sandi
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body accordion-setting">
                    <div class="my-3 d-flex justify-content-between">
                        <div>
                            <input type="password" class="pass-btn" name="password" id="password" placeholder="Kata sandi baru" style="width: 352px;"/>
                            <i class="bi bi-eye-slash" id="togglePassword"></i>
                        </div>
                        <button type="submit" class="btn btn-red font-md font-white font-bold" style="width: 153px;">ganti</button>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection