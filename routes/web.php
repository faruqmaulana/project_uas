<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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

Route::get('/login', function () {
  return view('login');
});

Route::get('/order', function () {
  return view('order.contactpassanger', [
    'active' => 'Order'
  ]);
});

Route::get('/login-password', function () {
  return view('password');
});

Route::get('/registrasi', function () {
  return view('daftar');
});

Route::get('/order/eticket', function () {
  return view('order.eticket');
});
Route::get('/order/review', function () {
  return view('order.review');
});

Route::get('/my-ticket', function () {
  return view('profile.my-ticket', [
    'active' => 'Flight',
    'tittle' => 'My Ticket'
  ]);
});

Route::get('/my-profile', function () {
  return view('profile.my-profile', [
    'active' => 'Flight',
    'tittle' => 'My Profile'
  ]);
});

Route::get('/my-profile-setting', function () {
  return view('profile.my-profile-setting', [
    'active' => 'Flight',
    'tittle' => 'My Profile'
  ]);
});

Route::get('/my-ticket-detail', function () {
  return view('profile.my-ticket-detail', [
    'active' => 'Flight',
    'tittle' => 'My Ticket'
  ]);
});
