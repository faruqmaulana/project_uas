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

Route::get('/order/eticket', function () {
  return view('order.eticket');
});

Route::get('/review', function () {
  return view('order.review');
});
