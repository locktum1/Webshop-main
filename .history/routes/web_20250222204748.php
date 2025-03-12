<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/product', function () {
    return view('product');
})->name('product');

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

Route::get('/privacyPolicy', function () {
    return view('privacyPolicy');
})->name('privacyPolicy');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
