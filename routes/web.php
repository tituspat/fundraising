<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PhotoController;

// Admin
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminUsersController;

// Mod
use App\Http\Controllers\Mod\ModDashboardController;

// Media
use App\Http\Controllers\Media\MediaDashboardController;


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


Route::controller(MainController::class)->group(function () {
    // view
    Route::get('/', 'index');
});

Route::get('/dashboard', function () {
    return view('pages.admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/users', function () {
    return view('pages.admin.users-datatable');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'verified'])->group(function () {
    // admin
    Route::name('admin')
    ->prefix('admin')
    // ->middleware(['permission:admin'])
    ->group(function () {
      Route::get('/', [AdminDashboardController::class, 'index'])->name('');
      Route::get('/users', [AdminUsersController::class, 'index'])->name('');
    });
    
    // mod
    Route::name('mod')
    ->prefix('mod')
    // ->middleware(['permission:mod'])
    ->group(function () {
    //   Route::get('/', ModDashboardController::class)->name('');
    //   Route::get('/users', ModUsersController::class)->name('');
    });

    // media
    Route::name('media')
    ->prefix('media')
    // ->middleware(['permission:media'])
    ->group(function () {
    //   Route::get('/', ModDashboardController::class)->name('');
    });



});




// Auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
