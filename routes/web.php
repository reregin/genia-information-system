<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;

use App\Http\Controllers\AdminBlogController;


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
// Route::get('/competition', function () {
//     return view('modules.competition.competition');
// })->name('competition');

// Route::get('/details_competition', function () {
//     return view('modules.competition.details_competition');
// })->name('details_competition');

Route::get('/competition', [App\Http\Controllers\CompetitionController::class, 'index'])->name('competition');

Route::get('/competition/{id}', [App\Http\Controllers\CompetitionController::class, 'show'])->name('competition.details');

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
Route::get('/login', fn () => redirect()->route('admin.login'))->name('login');
Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/', function () {
        return view('modules.admin.index');
    })->name('dashboard');

    // Login Routes
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.submit');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // Authenticated Admin Routes
    Route::middleware('auth')->group(function () {
        // Dashboard
        Route::get('/dashboard', function () {
            return view('modules.admin.index');
        })->name('dashboard');

        // Competition
        Route::get('/competition/add', function () {
            return view('modules.admin.competition.add');
        })->name('competition.add');
      
        Route::get('/competitions', [App\Http\Controllers\AdminCompetitionController::class, 'index'])->name('competition');
        Route::get('/competitions/create', [App\Http\Controllers\AdminCompetitionController::class, 'create'])->name('competition.create');
        Route::post('/competitions', [App\Http\Controllers\AdminCompetitionController::class, 'store'])->name('competition.store');
        Route::get('/competitions/{id}/edit', [App\Http\Controllers\AdminCompetitionController::class, 'edit'])->name('competition.edit');
        Route::put('/competitions/{id}', [App\Http\Controllers\AdminCompetitionController::class, 'update'])->name('competition.update');
        Route::delete('/competitions/{id}', [App\Http\Controllers\AdminCompetitionController::class, 'destroy'])->name('competition.destroy');

      

        // News Routes
        Route::get('/news', [App\Http\Controllers\Admin\NewsController::class, 'index'])->name('news');
        Route::get('/news/add', [App\Http\Controllers\Admin\NewsController::class, 'create'])->name('news.add');
        Route::post('/news', [App\Http\Controllers\Admin\NewsController::class, 'store'])->name('news.store');
        Route::get('/news/edit/{id}', [App\Http\Controllers\Admin\NewsController::class, 'edit'])->name('news.edit');
        Route::put('/news/{id}', [App\Http\Controllers\Admin\NewsController::class, 'update'])->name('news.update');
        Route::delete('/news/{id}', [App\Http\Controllers\Admin\NewsController::class, 'destroy'])->name('admin.news.destroy');

//         Route::get('/blog', function () {
//             return view('modules.admin.blog.manage');
//         })->name('admin.blog');
        // Blog
        Route::get('/blog', [AdminBlogController::class, 'index'])->name('blog');
        Route::get('/blog/add', [AdminBlogController::class, 'create'])->name('blog.add');
        Route::post('/blog/add', [AdminBlogController::class, 'store'])->name('blog.store');
        Route::get('/blog/edit/{blog?}', [AdminBlogController::class, 'edit'])->name('blog.edit');
        Route::put('/blog/edit/{blog}', [AdminBlogController::class, 'update'])->name('blog.update');
        Route::delete('/{blog}', [AdminBlogController::class, 'destroy'])->name('blog.delete');

        Route::get('/blog/add', function () {
            return view('modules.admin.blog.add');
        })->name('blog.add');

        Route::get('/blog/edit', function () {
            return view('modules.admin.blog.edit');
        })->name('blog.edit');

        // News
        Route::get('/news', function () {
            $news = new \Illuminate\Pagination\LengthAwarePaginator(
                [],
                0,  // Total items
                10, // Items per page
                1   // Current page
            );
            return view('modules.admin.news.manage', compact('news'));
        })->name('news');

        Route::get('/news/add', function () {
            return view('modules.admin.news.add');
        })->name('news.add');

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
        })->name('news.edit');

        // API routes for news management
        Route::put('/news/{id}', function ($id) {
            // Update news logic here
            return redirect()->route('admin.news');
        })->name('news.update');

        Route::delete('/news/{id}', function ($id) {
            // Delete news logic here
            return response()->json(['success' => true]);
        })->name('news.delete');

    });
});