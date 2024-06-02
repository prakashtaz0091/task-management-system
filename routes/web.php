<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;

Route::get('/', function () {
    return view('home');
});

Route::controller('login', LoginController::class)->name('login');
Route::controller('signup', SignupController::class)->name('signup');
