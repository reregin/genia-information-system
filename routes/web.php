<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function (){
    return view('home');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/selengkapnya', [LandingController::class, 'showSelengkapnya']);

Route::get('/awarded', function () {return view('awarded');})->name('awarded');

Route::get('/login', function () {
    return view('login');
});

Route::get('/forgot-password-1', function () {
    return view('forgot_password1');
});

Route::get('/forgot-password-2', function () {
    return view('forgot_password2');
});

