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
    return view('landing');

});
Route::get('/video', function () {
    return view('video');
});
Route::get('/foto', function () {
    return view('foto');
});
Route::get('/profil', function () {
    return view('profile');
});
Route::get('/testimoni', function () {
    return view('testimoni');
});
Route::get('/program', function () {
    return view('program');
});
Route::get('/program-beras', function () {
    return view('program-beras');
});
Route::get('/about', function () {
    return view('about-us');
});
Route::get('/index', function () {
    return view('index');
});
