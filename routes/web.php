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

Route::get('/lomba', function () {
    return view('lomba');
});
