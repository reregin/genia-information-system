<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;


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

Route::get('/details_news', function () {
    return view('modules.news.details_news');
})->name('details_news');

// ====================
// COMPETITION
// ====================
Route::get('/competition', function () {
    return view('modules.competition.competition');
})->name('competition');

Route::get('/details_competition', function () {
    return view('modules.competition.details_competition');
})->name('details_competition');

Route::get('/details_participant', function () {
    return view('modules.competition.details_participant');
})->name('details_participant');



// ====================
// BLOG
// ====================
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/details_blog/{slug?}', [BlogController::class, 'show'])->name('details_blog');
Route::get('/send_blog', [BlogController::class, 'submitForm'])->name('send_blog');


// ====================
// ADMIN
// ====================
Route::prefix('admin')->group(function () {

    // Login Routes
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login.submit');
    Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');

    // Authenticated Admin Routes
    Route::middleware('auth')->group(function () {
        // Dashboard
        Route::get('/dashboard', function () {
            return view('modules.admin.index');
        })->name('admin.dashboard');

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
//         Route::get('/blog', function () {
//             return view('modules.admin.blog.manage');
//         })->name('admin.blog');
        // Blog
        Route::get('/blog', [AdminBlogController::class, 'index'])->name('');
        Route::get('/blog/add', [AdminBlogController::class, 'create'])->name('.add');
        Route::post('/blog/add', [AdminBlogController::class, 'store'])->name('.store');
        Route::get('/blog/edit/{blog?}', [AdminBlogController::class, 'edit'])->name('.edit');
        Route::put('/blog/edit/{blog}', [AdminBlogController::class, 'update'])->name('.update');
        Route::delete('/{blog}', [AdminBlogController::class, 'destroy'])->name('.delete');

        Route::get('/blog/add', function () {
            return view('modules.admin.blog.add');
        })->name('admin.blog.add');

        Route::get('/blog/edit', function () {
            return view('modules.admin.blog.edit');
        })->name('admin.blog.edit');

        // News
        Route::get('/news', function () {
            $news = new \Illuminate\Pagination\LengthAwarePaginator(
                [],
                0,  // Total items
                10, // Items per page
                1   // Current page
            );
            return view('modules.admin.news.manage', compact('news'));
        })->name('admin.news');

        Route::get('/news/add', function () {
            return view('modules.admin.news.add');
        })->name('admin.news.add');

        Route::get('/news/edit/{id}', function ($id) {
            return view('modules.admin.news.edit', ['news' => (object)[
                'id' => $id,
                'title' => '',
                'caption' => '',
                'content' => '',
                'level' => '',
                'competition' => '',
                'status' => '',
                'thumbnail' => '',
                'link' => '',
                'publish_date' => '',
                'slug' => ''
            ]]);
        })->name('admin.news.edit');

        // API routes for news management
        Route::put('/news/{id}', function ($id) {
            // Update news logic here
            return redirect()->route('admin.news');
        })->name('admin.news.update');

        Route::delete('/news/{id}', function ($id) {
            // Delete news logic here
            return response()->json(['success' => true]);
        })->name('admin.news.delete');
    });

});