<?php

use Illuminate\Support\Facades\Route;


// ====================
// LANDING
// ====================
Route::get('/', function () {
    return view('modules.landing.index');
});

Route::get('/about-us', function () {
    return view('modules.landing.about_us');
});


Route::get('/awarded', function () {
    return view('modules.landing.awarded');
})->name('awarded');

// ====================
// NEWS
// ====================
Route::get('/news', function () {
    return view('modules.news.news');
})->name('news');

// ====================
// COMPETITION
// ====================
Route::get('/competition', function () {
    return view('modules.competition.competition');
})->name('competition');

Route::get('/details_competition', function () {
    return view('modules.competition.details_competition');
})->name('details_competition');

// ====================
// BLOG
// ====================
Route::get('/blog', function () {
    return view('modules.blog.blog');
})->name('blog');

Route::get('/details_blog', function () {
    return view('modules.blog.details_blog');
})->name('details_blog');

Route::get('/send_blog', function () {
    return view('modules.blog.send_blog');
})->name('send_blog');


// ====================
// ADMIN
// ====================
Route::prefix('admin')->group(function () {
  
    // Dashboard
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.dashboard');

