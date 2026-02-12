<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// Dashboard
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
