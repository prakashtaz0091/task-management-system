<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LogoutController;

Route::get('/', function () {
    return view('home');
})->name('home');



Route::post('login', [LoginController::class, 'login'])->name('login');

Route::post('signup', [SignupController::class, 'signup'])->name('signup');

Route::get('/logout', LogoutController::class)->name('logout');



// Route::controller('/signup', SignupController::class)->name('signup');
