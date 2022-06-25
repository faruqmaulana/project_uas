
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login-password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    {{-- <link href="styles/login.css" rel="stylesheet"> --}}
    <style>
        a{
            color:#ed1f24;
        }
        a:hover{
            color:#ed1f24
        }
    </style>
</head>
<body>
    <section>
        <div class="container-fluid pb-2 pt-5" style="background-color: white">
            <div class="container ">
                <div class="col-12 d-flex align-items-center justify-content-center flex-column">
                    <a href="#"><img src="assets/login/logo.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="container">
            @if(session()->has('LoginError'))
            <div class="col-5 offset-8 alert alert-danger alert-dismissible fade show" role="alert" style="width: 37%; margin-bottom: -50px;">
                <strong>{{ session('LoginError') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <div class="container-fluid pt-1" style="background-color: white; padding-bottom: 320px; margin-top: 4%; background-image: url('assets/login/background.png'); background-repeat:no-repeat">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <div class="card shadow border rounded-lg" style="background-color: #D9D9D9">       
                            <div class="card-body mt-2 mb-5 px-5">
                                <div class="row py-3">
                                    <h5>Gabung dan gunakan fitur mudahnya</h5>
                                </div>
                                <div class="row border-bottom border-dark mt-1 mb-3">
                                    <div class="col-2 py-3">
                                        <img src="assets/login/profil.png" alt="">
                                    </div>
                                    <div class="col">
                                        <h4 class="text-start" style="font-size: 16px">Smart Profile</h4>
                                        <p style="font-size: 15">Pesan lebih cepat. Cukup dengan satu klik untuk lengkapi detail penumpang</p>
                                    </div>
                                </div>
                                <div class="row border-bottom border-dark mt-1 mb-3">
                                    <div class="col-2 py-3">
                                        <img src="assets/login/dompet.png" alt="">
                                    </div>
                                    <div class="col">
                                        <h4 class="text-start" style="font-size: 16px">Smart Pay</h4>
                                        <p style="font-size: 15px">Tangani semua transaksi dan pembayaran dengan cepat dan aman.</p>
                                    </div>
                                </div>
                                <div class="row border-bottom border-dark mb-5 mt-1 mb-3">
                                    <div class="col-2 py-3">
                                        <img src="assets/login/jadwal.png" alt="">
                                    </div>
                                    <div class="col">
                                        <h4 class="text-start" style="font-size: 16px">Smart Schedule</h4>
                                        <p style="font-size: 15px">Mengurus semua pengajuan reschedule untuk pesananmu tanpa perlu repot.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card col-9 shadow offset-6  border rounded-lg" style="background-color: #D9D9D9">
                            <div class="card-body mt-2 mb-5" style="padding-left: 40px; padding-right: 40px; padding-top: 10px">
                                <div class="col">
                                    <div class="row mb-3 mt-4" style="padding-left: 0px">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-1">
                                                    <a href="javascript:history.back()" class="color-red">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <h5 style="font-size: 24px">Log in</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col pb-3">
                                        <div class="row text-muted" style="font-size: 20px">
                                            <h4>Email</h4>
                                        </div>
                                        <div class="row" style="font-size: 20px">
                                            <p> 
                                               {{ $email }}
                                            </p>
                                        </div>
                                    </div>
                                    <form action="/login-password" method="POST">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="form-floating mb-3">
                                            <input  name="email" value="{{ $email }}" type="hidden" style="background-color: #D9D9D9" class="form-control border-dark" id="floatingInput" placeholder="name@example.com">
                                            <input name="password" type="password" style="background-color: #D9D9D9" class="form-control border-dark" id="floatingInput" placeholder="name@example.com" required autofocus>
                                                <label for="floatingInput" style="margin-left: 20px; font-size: 18px">
                                                    <div class="row">
                                                        <div class="col">
                                                            Password
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row col-12 mb-3">
                                            <button type="submit" class="btn btn-lg btn-danger rounded-pill" style="margin-left: 11px">Login</button>
                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container pb-5" style="margin-top: 0%">
                <div class="row" style="padding-top: 10%">
                    <div class="col my-3">
                        <h1 class="text-center" style="font-size: 20px">2022 PT.Tiketku. All Right Reserved</h1>
                    </div>
                    <div class="col-12 d-flex align-items-center justify-content-center flex-column">
                        <a href="#">
                            <img src="assets/login/logo.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

