<?php

use Illuminate\Support\Facades\Route;



// Page Route
Route::get('/', function () {
    return view('pages.index');
});

Route::get('/profil-program-studi', function () {
    return view('pages.department-profile');
})->name('department-profile');

Route::get('/staf-pengajar', function () {
    return view('pages.lecturer-profile');
})->name('lecturer-profile');

Route::get('/staf-pengajar/{name}', function ($name) {
    return view('pages.lecturer-detail', compact('name'));
})->name('lecturer-detail');


Route::get('/kehidupan-kampus', function () {
    return view('pages.campus-life');
})->name('campus-life');


Route::get('/artikel-dan-berita', function () {
    return view('pages.news');
})->name('news');

Route::get('/artikel-dan-berita/{title}', function ($title) {
    return view('pages.news-detail', compact('title'));
})->name('news-detail');





// Authentication Route
Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');




// Dashboard Route
Route::prefix('app')->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.app.dashboard');
    })->name('dashboard');


    Route::prefix('posts')->group(function () {
        Route::get('/categories', function () {
            return view('pages.app.posts-categories');
        })->name('posts.categories');
    });
});
