<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
    
});

// Route for the About Us page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route for the Contact Us page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/privacy-policy', function () {
    return view('privacyPolicy');
})->name('privacyPolicy');  //  <-- Important:  This is the ROUTE NAME!>name('privacyPolicy');

// Route for the Terms of Service page (with kebab-case URL)
Route::get('/terms-of-service', function () {
    return view('termsofService');
})->name('termsofService');

// Route for the FAQ page
Route::get('/faq', function () {
    return view('faq');
})->name('faq');


Route::get('/', [MovieController::class, 'index'])->name('home');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');
Route::get('/movies/{id}/book', [MovieController::class, 'book'])->name('movies.book');
Route::post('/movies/payment', [MovieController::class, 'payment'])->name('movies.payment');

Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');


