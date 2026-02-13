<?php

use Illuminate\Support\Facades\Route;



// Page Route
Route::get('/', function () {
    return view('pages.index');
});

Route::get('/profil-program-studi', function () {
    return view('pages.department-profile');
})->name('department-profile');




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
