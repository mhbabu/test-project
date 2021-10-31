<?php

use App\Http\Controllers\ServiceBookingController;
use App\Http\Controllers\SslCommerzPaymentController;
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

Route::get('/',[ServiceBookingController::class,'serviceBooking']);
Route::post('service-booking-payment', [ServiceBookingController::class,'serviceBookingPayment'])->name('payment-with-service-booking');

Route::group(['prefix' => 'sslwireless'], function () {
    Route::post('payment/success', [ServiceBookingController::class,'sslSubscriptionSuccess']);
    Route::post('payment/fail/{refId?}', [ServiceBookingController::class,'sslSubscriptionFail']);
    Route::post('payment/cancel/{refId?}', [ServiceBookingController::class,'sslSubscriptionCancel']);
    Route::post('payment/ipn/{refId?}', [ServiceBookingController::class,'sslResponseIpn']);
});
