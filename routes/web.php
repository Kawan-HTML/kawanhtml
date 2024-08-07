<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/html-card', function () {
    return redirect('/html-card/');
});
Route::get('/html-portofolio/', function () {
    return view('html-card');
});


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::middleware(['web'])->group(function () {
    Route::get('/auth/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('google-auth');
    Route::get('/auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback']);
});

// Route::get('/auth/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('google-auth');
// Route::get('/auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])->name('portfolio.show');
Route::post('/submit-portfolio-request', 'PortfolioController@submitRequest')->name('submit-portfolio-request');