<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrowseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [WelcomeController::class, 'Welcome'])->name('index');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/search.search',[ProductController::class, 'Search'])->name('product.search');

Route::get('/browse',[BrowseController::class, 'Browse'])->name('browse');

Route::get('/recommendations', [RecommendationController::class, 'getRecommendations']);

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/cart', function() {
    return view('cart');
})->name('cart');

Route::post('/add-to-cart', 'CartController@addToCart');

Route::get('/auth', function () {
    return view('auth');
})->name('auth');

Route::post('/auth.submit', [AuthController::class ,'Submit'
])->name('auth.submit');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register.submit', [RegisterController::class ,'Submit'
])->name('register.submit');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/privacyPolicy', function () {
    return view('privacyPolicy');
})->name('privacyPolicy');
