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
Route::get('/news', function () {return view('news');})->name('news');

Route::get('/lomba', function () {
    return view('lomba');
})->name('lomba');
Route::get('/details_lomba', function () {
    return view('details_lomba');
})->name('details_lomba');
Route::get('/details_blog', function () {
    return view('details_blog');
})->name('details_blog');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/send_blog', function () {
    return view('send_blog');
})->name('send_blog');

Route::get('/about-us', function () {
    return view('about_us');
});
