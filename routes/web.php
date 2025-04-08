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
        return view('modules.admin.index');
    })->name('admin.dashboard');

    // Login
    Route::get('/login', function () {
        return view('modules.admin.login');
    })->name('admin.login');
    
    // Competition
    Route::get('/competition', function () {
        return view('modules.admin.competition.manage');
    })->name('admin.competition');
    
    Route::get('/competition/add', function () {
        return view('modules.admin.competition.add');
    })->name('admin.competition.add');
    
    Route::get('/competition/edit', function () {
        return view('modules.admin.competition.edit');
    })->name('admin.competition.edit');

    // Blog
    Route::get('/blog', function () {
        return view('modules.admin.blog.manage');
    })->name('admin.blog');
    
    Route::get('/blog/add', function () {
        return view('modules.admin.blog.add');
    })->name('admin.blog.add');
    
    Route::get('/blog/edit', function () {
        return view('modules.admin.blog.edit');
    })->name('admin.blog.edit');

});