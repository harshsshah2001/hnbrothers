<?php

use App\Http\Controllers\website\auth\AuthController as AuthAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\WebsiteController;
use App\Http\Controllers\website\AuthController;

Route::get('/', function () {
    return view('website.index');
});

Route::controller(WebsiteController::class)->group(function(){
    });
    
    Route::controller(AuthAuthController::class)->group(function(){
        Route::get('register','register');
        Route::get('login','login')->name('login');
    
});

