<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\TicketBookingController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('Backend.welcome');
});
// Route::get('/Admin', function () {
//     return view('Backend.Layouts.Admin');
// });
// Route::get('/Schedule', function () {
//     return view('Backend.Layouts.Schedule');
// });
// Route::get('/Customer', function () {
//     return view('Backend.Layouts.Customer');
// });


Route::get('/Admin',[AdminController::class,'dashboard'])->name('AdminDashboard');
Route::get('/Customers',[CustomerController::class,'details'])->name('Customerdetails');
Route::get('/Schedule',[ScheduleController::class,'arrival'])->name('Schedulearrival');
Route::get('/Payment',[PaymentController::class,'ammount'])->name('Paymentammount');
Route::get('/Station',[StationController::class,'platform'])->name('Stationplatform');
Route::get('/TicketBooking',[TicketBookingController::class,'Conformation'])->name('TicketBookingConformation');
Route::get('/Route',[RouteController::class,'location'])->name('Routelocation');
Route::get('/Train',[TrainController::class,'Status'])->name('Trainstatus');
Route::get('/Login',[LoginController::class,'login'])->name('Loginlogin');