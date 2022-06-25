<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use App\Models\ClassFlight;
use App\Models\DestCity;
use App\Models\FlightRoute;
use App\Models\SourceCity;

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

//flight search and filter

Route::get('/flight', [FlightController::class, 'search']);

Route::get('/flight/flight-search', [FlightController::class, 'filter']);

//end of flight search and filter

Route::get('/about', function () {
  return view('about', [
    'active' => 'About'
  ]);
});

Route::get('/help', [DataController::class, 'help']);

Route::get('/flightsearch', function () {
  return view('flightSearch', [
    'active' => 'Flight'
  ]);
});

//order section

Route::get('/order', [OrderController::class, 'inputContact'])->middleware('auth');
Route::get('/order/review', [OrderController::class, 'orderReview'])->middleware('auth');
Route::post('/order/create', [OrderController::class, 'eTicketCreate']);
Route::get('/order/eticket', [OrderController::class, 'eTicket'])->middleware('auth');

//end of order section

// Login route

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'checkEmail'])->middleware('guest');

Route::get('/login-password', [LoginController::class, 'passwordLogin']);
Route::post('/login-password', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

// End of login route

// Register route

Route::get('/registrasi', [RegisterController::class, 'index']);
Route::post('/registrasi', [RegisterController::class, 'store']);

// End of register route
Route::get('/registrasi', function () {
  return view('daftar');
});

Route::get('/my-ticket', [TicketController::class, 'index']);
Route::get('/my-ticket/{ticket:id}', [TicketController::class, 'show']);
Route::delete('/my-ticket/{ticket:id}/delete', [TicketController::class, 'destroy']);

Route::get('/my-profile', [ProfileController::class, 'index']);
Route::put('/my-profile', [ProfileController::class, 'updateProfile']);


Route::get('/my-profile-setting', function () {
  return view('profile.my-profile-setting', [
    'active' => 'Flight',
    'tittle' => 'My Profile'
  ]);
});
