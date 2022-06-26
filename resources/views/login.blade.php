<?php
if(session()->has('loginError')){
    header( "refresh:2;url=/registrasi" );
}

?>

{{-- {{ dd(session()->has('info')) }} --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container-fluid pb-2 pt-5" style="background-color: white">
            <div class="container">
                <div class="col-12 d-flex align-items-center justify-content-center flex-column">
                    <a href="/"><img src="assets/login/logo.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="container">
            @if(session()->has('info'))
            <div class="col-5 offset-8 alert alert-info alert-dismissible fade show" role="alert" style="width: 37%; margin-bottom: -50px;">
                {{ session('info') }}
            </div>
            @endif
            @if(session()->has('success'))
            <div class="col-5 offset-8 alert alert-success alert-dismissible fade show" role="alert" style="width: 37%; margin-bottom: -50px;">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(session()->has('loginError'))
            <div class="col-5 offset-8 alert alert-danger alert-dismissible fade show" role="alert" style="width: 37%; margin-bottom: -50px;">
                <strong>Email tidak belum terdaftar, </strong>{{ session('loginError') }}
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
                                    <h5>Join and use its easy features</h5>
                                </div>
                                <div class="row border-bottom border-dark mt-1 mb-3">
                                    <div class="col-2 py-3">
                                        <img src="assets/login/profil.png" alt="">
                                    </div>
                                    <div class="col">
                                        <h4 class="text-start" style="font-size: 16px">Smart Profile</h4>
                                        <p style="font-size: 15">Order faster. Just one click to complete passenger details.</p>
                                    </div>
                                </div>
                                <div class="row border-bottom border-dark mt-1 mb-3">
                                    <div class="col-2 py-3">
                                        <img src="assets/login/dompet.png" alt="">
                                    </div>
                                    <div class="col">
                                        <h4 class="text-start" style="font-size: 16px">Smart Pay</h4>
                                        <p style="font-size: 15px">Handle all transactions and payments quickly and securely.</p>
                                    </div>
                                </div>
                                <div class="row border-bottom border-dark mb-5 mt-1 mb-3">
                                    <div class="col-2 py-3">
                                        <img src="assets/login/jadwal.png" alt="">
                                    </div>
                                    <div class="col">
                                        <h4 class="text-start" style="font-size: 16px">Smart Schedule</h4>
                                        <p style="font-size: 15px">Take care of all rescheduling requests for your order without the hassle.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card col-9 shadow offset-6  border rounded-lg" style="background-color: #D9D9D9">
                            <div class="card-body mt-2 mb-5" style="padding-left: 40px; padding-right: 40px; padding-top: 10px">
                                <div class="col">
                                    <div class="row mb-5">
                                        <div class="col">
                                            <h5 style="font-size: 24px">Log in/Daftar</h5>
                                            <p>Your exciting journey starts here</p>
                                        </div>
                                    </div>
                                    <form action="/login" method="POST">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="form-floating mb-3">
                                                <input name="email" type="email" style="background-color: #D9D9D9" class="form-control border-dark" id="floatingInput" placeholder="name@example.com" required autofocus>
                                                <label for="floatingInput" style="margin-left: 10px">Email address</label>
                                            </div>
                                        </div>
                                        <div class="row col-12 mb-3">
                                            <button type="submit" class="btn btn-lg btn-danger rounded-pill" style="margin-left: 11px">Selanjutnya</button>
                                        </div>
                                    </form>
                                    <div class="row px-1 mb-3">
                                        <div class="col-4 offset-1">
                                            <img src="assets/login/garis.png" alt="">
                                        </div>
                                        <div class="col-2">
                                            <p class="text-start">or</p>
                                        </div>
                                        <div class="col-2">
                                            <img src="assets/login/garis.png" alt="">
                                        </div>
                                    </div>
                                    <div class="row col-12 mb-3">
                                        <button type="button" class="btn btn-outline-dark rounded-pill" style="margin-left: 11px">
                                            <div class="row align-items-center">
                                                <div class="col-1">
                                                    <img src="assets/login/apple.png" alt="">
                                                </div>
                                                <div class="col text-align-center">
                                                Sign in with apple
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="row col-12 mb-3">
                                        <button type="button" class="btn btn-outline-dark rounded-pill" style="margin-left: 11px">
                                            <div class="row align-items-center">
                                                <div class="col-1">
                                                    <img src="assets/login/google.png" alt="">
                                                </div>
                                                <div class="col">
                                                Sign in with google
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="row col-12" style="margin-bottom: 8%">
                                        <button type="button" class="btn btn-outline-dark rounded-pill" style="margin-left: 11px">
                                            <div class="row align-items-center">
                                                <div class="col-1">
                                                    <img src="assets/login/facebook.png" alt="">
                                                </div>
                                                <div class="col">
                                                Login with facebook
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container pb-5 pt-1" style="margin-top: 5%">
                <div class="row">
                    <div class="col my-3">
                        <h1 class="text-center" style="font-size: 20px">2022 PT.Tiketku. All Right Reserved</h1>
                    </div>
                    <div class="col-12 d-flex align-items-center justify-content-center flex-column">
                        <a href="/">
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


