<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',  function () {
  return view('home', [
    'active' => 'Home'
  ]);
});

Route::get('/flight', function () {
  return view('flight', [
    'active' => 'Flight'
  ]);
});


Route::get('/about', function () {
  return view('about', [
    'active' => 'About'
  ]);
});

Route::get('/help', function () {
  return view('help', [
    'active' => 'Help'
  ]);
});

Route::get('/flightsearch', function () {
  return view('flightSearch', [
    'active' => 'Flight'
  ]);
});


Route::get('/order', function () {
  return view('order.contactpassanger', [
    'active' => 'Order'
  ]);
});

// Login route

Route::get('/login',[LoginController::class, 'index'] );
Route::post('/login',[LoginController::class, 'checkEmail'] );

Route::get('/login-password', [LoginController::class, 'passwordLogin']);
Route::post('/login-password',[LoginController::class, 'authenticate'] );


// End of login route

// Register route

Route::get('/registrasi',[RegisterController::class, 'index'] );
Route::post('/registrasi',[RegisterController::class, 'store'] );

// End of register route

Route::get('/order/eticket', function () {
  return view('order.eticket');
});
Route::get('/order/review', function () {
  return view('order.review');
});

Route::get('/my-ticket', function () {
  return view('profile.my-ticket',[
    'active' => 'Flight',
    'tittle' => 'My Ticket'
  ]);
});

Route::get('/my-profile',[ProfileController::class, 'index'] );


Route::get('/my-profile-setting', function () {
  return view('profile.my-profile-setting',[
    'active' => 'Flight',
    'tittle' => 'My Profile'
  ]);
});