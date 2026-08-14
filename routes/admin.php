<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('admin', [AdminController::class, 'dashboard'])->name('dashboard');
