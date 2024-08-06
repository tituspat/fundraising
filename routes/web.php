<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');

});

// Auth
Route::get('/login', function () {
    return view('pages.auth.login');
});

// Admin
Route::get('/dashboard', function () {
    return view('pages.admin.dashboard');
});


// Relawan

Route::get('/profil', function () {
    return view('profile');
});


Route::get('/about', function () {
    return view('about-us');
});

Route::get('/index', function () {
    return view('index');
});

