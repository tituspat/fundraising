<?php

use Illuminate\Support\Facades\Route;

// Landing
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PhotoController;

// Dashboard
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\GalleryController;
use App\Http\Controllers\Dashboard\UsersController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\ProfileCalonController;

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


Route::get('/blog', function () {
  return view('blog');
});

Route::get('/blog/details', function () {
  return view('blog-details');
});

Route::controller(MainController::class)->group(function () {
    // view
    Route::get('/', 'index');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // admin
    Route::name('admin')
    ->prefix('admin')
    // ->middleware(['permission:admin'])
    ->group(function () {
      Route::get('/dashboard', [DashboardController::class, 'index'])->name('');
      Route::get('/users', [UsersController::class, 'index'])->name('');
      Route::get('/users/delete/{id}', [UsersController::class, 'destroy'])->name('');
      Route::post('/users/update', [UsersController::class, 'update'])->name('');
      Route::post('/users/add', [UsersController::class, 'store'])->name('');
      Route::get('/berita', [BlogController::class, 'index'])->name('');
      Route::get('/profile-calon', [ProfileCalonController::class, 'index'])->name('');
      Route::get('/gallery', [GalleryController::class, 'index'])->name('');
    });

    // mod
    Route::name('mod')
    ->prefix('mod')
    // ->middleware(['permission:mod'])
    ->group(function () {
      Route::get('/dashboard', [DashboardController::class, 'index'])->name('');
    //   Route::get('/users', ModUsersController::class)->name('');
    });

    // media
    Route::name('media')
    ->prefix('media')
    // ->middleware(['permission:media'])
    ->group(function () {
      Route::get('/dashboard', [DashboardController::class, 'index'])->name('');
    });
});


// Auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/profile', function () {
    return view('pages.about-us');
});

require __DIR__.'/auth.php';
