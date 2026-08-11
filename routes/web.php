<?php

use App\Http\Controllers\website\auth\AuthController as AuthAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\WebsiteController;
use App\Http\Controllers\website\AuthController;

Route::get('/', function () {
    return view('website.index');
})->name('website.index');


Route::controller(AuthAuthController::class)->group(function () {
    Route::get('register', 'register');
    Route::post('send-otp', 'sendOtp')->name('otp.send');
    Route::post('verify-otp', 'verifyOtp')->name('otp.verify');
    Route::post('register', 'registerResponse')->name('register.response');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'logincheck')->name('login.check');
    Route::get('logout', 'logout')->name('logout');
});
