<?php

use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;

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

//首頁view
Route::view('/', 'index');


Route::resource('restaurants', 'App\Http\Controllers\RestaurantController');

Route::get('/restaurants/detail/{id}', 'App\Http\Controllers\RestaurantController@detail');

Route::view('/reservations', 'reservation.reservations');

Route::view('/login', 'member.login');
Route::view('/myDetail', 'member.myDetail');
Route::view('/myPublish', 'member.myPublish');

// Route::view('/myReservations', 'member.myReservations')
Route::resource('myReservations', 'App\Http\Controllers\ReservationController');
