<?php

use Illuminate\Support\Facades\Route;

// Landing
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\NewsController;


// Dashboard
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\GalleryController;
use App\Http\Controllers\Dashboard\UsersController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\ProfileCalonController;
use App\Http\Controllers\Dashboard\NewsCrawlerController;


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
// comment

Route::get('/blog', function () {
  return view('blog');
});

Route::get('/berita', [NewsController::class, 'index'])->name('berita.index');

Route::get('/berita/insert', function () {
    return view('pages.dashboard.berita');
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
    Route::name('admin.')
    ->prefix('admin')
    // ->middleware(['permission:admin'])
    ->group(function () {
      Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
      Route::get('/users', [UsersController::class, 'index'])->name('users');
      Route::get('/users/delete/{id}', [UsersController::class, 'destroy'])->name('users.delete');
      Route::post('/users/update', [UsersController::class, 'update'])->name('users.update');
      Route::post('/users/add', [UsersController::class, 'store'])->name('users.add');
      Route::get('/blog', [BlogController::class, 'index'])->name('blog');
      Route::get('/profile-calon', [ProfileCalonController::class, 'index'])->name('profile-calon');
      Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
      Route::get('/gallery/tambah', [GalleryController::class, 'create'])->name('gallery.create');
      Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
      Route::get('/gallery/{id}/detail', [GalleryController::class, 'show'])->name('gallery.detail');
      Route::get('/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
      Route::post('/gallery/update', [GalleryController::class, 'update'])->name('gallery.update');
      Route::get('/berita', [NewsCrawlerController::class, 'index'])->name('berita');

      Route::get('/blog/tambah', [BlogController::class, 'create'])->name('blog.create');

    });

    // mod
    Route::name('mod.')
    ->prefix('mod')
    // ->middleware(['permission:mod'])
    ->group(function () {
      Route::get('/dashboard', [DashboardController::class, 'index'])->name('');
    //   Route::get('/users', ModUsersController::class)->name('');
    });

    // media
    Route::name('media.')
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
