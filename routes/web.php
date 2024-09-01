<?php

use Illuminate\Support\Facades\Route;

// Landing
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\PublicProgramController;
use App\Http\Controllers\PublicBlogController;



// Dashboard
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\GalleryController;
use App\Http\Controllers\Dashboard\UsersController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\ProfileCalonController;
use App\Http\Controllers\Dashboard\NewsCrawlerController;
use App\Http\Controllers\Dashboard\ManageTestimoniController;
use App\Http\Controllers\Dashboard\ManageFAQController;
use App\Http\Controllers\Dashboard\ManageQuestionController;
use App\Http\Controllers\Dashboard\ProgramController;
use App\Http\Controllers\Dashboard\ContentController;
use App\Http\Controllers\FAQController;

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


Route::get('/faqs', [FAQController::class, 'index'])->name('faqs.index');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::post('questions', [QuestionController::class, 'store'])->name('questions.store');
Route::get('/foto', [GalleryController::class, 'showPhoto'])->name('foto.index');
// Route::get('/foto/{id}', [GalleryController::class, 'showPhoto'])->name('foto.index');
Route::get('/video', [GalleryController::class, 'showVideo'])->name('video.index');
Route::get('/video/{id}', [GalleryController::class, 'showVideo'])->name('video.index');
Route::get('/program', [PublicProgramController::class, 'index'])->name('program.index');
Route::get('/program/{program}', [PublicProgramController::class, 'show'])->name('program.show');
Route::get('/blog', [PublicBlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [PublicBlogController::class, 'show'])->name('blog.show');


Route::controller(MainController::class)->group(function () {
    // view
    Route::get('/', 'index');
});
Route::get('/testimoni', [TestimonialController::class, 'index'])->name('testimoni');

Route::middleware(['auth', 'verified'])->group(function () {
    // admin
    Route::name('admin.')
    ->prefix('admin')
    // ->middleware(['permission:admin'])
    ->group(function () {
      Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
      Route::get('/content', [ContentController::class, 'index'])->name('content');
      Route::post('/content/update', [ContentController::class, 'update'])->name('content.update');
      Route::get('/users', [UsersController::class, 'index'])->name('users');
      Route::get('/users/delete/{id}', [UsersController::class, 'destroy'])->name('users.delete');
      Route::post('/users/update', [UsersController::class, 'update'])->name('users.update');
      Route::get('/profile-calon', [ProfileCalonController::class, 'index'])->name('profile-calon');
      Route::put('/profile-calon/update', [ProfileCalonController::class, 'update'])->name('calon.update');
      // gallery
      Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
      Route::get('/gallery/tambah', [GalleryController::class, 'create'])->name('gallery.create');
      Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
      Route::get('/gallery/{id}/detail', [GalleryController::class, 'show'])->name('gallery.detail');
      Route::get('/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
      Route::post('/gallery/update', [GalleryController::class, 'update'])->name('gallery.update');
      Route::post('/video/preview', [GalleryController::class, 'vidPreview'])->name('video.preview');
      Route::get('/video/preview', [GalleryController::class, 'vidPreview'])->name('video.preview');
      Route::post('/video/store', [GalleryController::class, 'vidStore'])->name('video.store');
      Route::get('/gallery/{id}/delete', [GalleryController::class, 'destroy'])->name('gallery.delete');
      Route::get('/gallery/visibility/{id}', [GalleryController::class, 'toggleVisibility'])->name('gallery.toggleVisibility');
      // berita
      Route::get('/news', [NewsCrawlerController::class, 'index'])->name('news');
      Route::get('/news/tambah', [NewsCrawlerController::class, 'create'])->name('news.create');
      Route::post('/news/preview', [NewsCrawlerController::class, 'preview'])->name('news.preview');
      Route::post('/news/store', [NewsCrawlerController::class, 'store'])->name('news.store');
      Route::get('/news/show/{id}', [NewsCrawlerController::class, 'show'])->name('news.tampilkan');
      Route::get('/news/hide/{id}', [NewsCrawlerController::class, 'hide'])->name('news.sembunyikan');
      Route::get('/news/delete/{id}', [NewsCrawlerController::class, 'destroy'])->name('news.destroy');
      // testimoni
      Route::get('/testimoni', [TestimonialController::class, 'index'])->name('testimoni');
      Route::post('/testimoni/store', [TestimonialController::class, 'store'])->name('testimoni.store');
      Route::get('/testimoni/edit', [TestimonialController::class, 'edit'])->name('testimoni.edit');
      Route::put('/testimoni/upadate/{id}', [TestimonialController::class, 'update'])->name('testimoni.update');
      Route::get('/testimonials', [ManageTestimoniController::class, 'index'])->name('testimoni.management');
      Route::post('/testimonials/previewed/{id}', [ManageTestimoniController::class, 'updatePreviewStatus'])->name('testimoni.preview');
      Route::post('/testimonials/unpreviewed/{id}', [ManageTestimoniController::class, 'updateUnpreviewStatus'])->name('testimoni.unpreview');
      Route::get('/faqs', [ManageFAQController::class, 'index'])->name('faqs');
      Route::get('/faqs/delete/{id}', [ManageFAQController::class, 'destroy'])->name('faqs.delete');
      Route::put('/faqs/update', [ManageFAQController::class, 'update'])->name('faqs.update');
      Route::post('/faqs/add', [ManageFAQController::class, 'store'])->name('faqs.add');
      Route::get('/question', [ManageQuestionController::class, 'index'])->name('question');
      // program
      Route::get('/program', [ProgramController::class, 'index'])->name('program.index');
      Route::get('/program/tambah', [ProgramController::class, 'create'])->name('program.create');
      Route::post('/program/store', [ProgramController::class, 'store'])->name('program.store');
      Route::get('/program/{id}/detail', [ProgramController::class, 'show'])->name('program.show');
      Route::get('/program/{id}/edit', [ProgramController::class, 'edit'])->name('program.edit');
      Route::post('/program/{id}/update', [ProgramController::class, 'update'])->name('program.update');
      Route::get('/program/{id}/delete', [ProgramController::class, 'destroy'])->name('program.destroy');
      Route::get('/program/{id}/visibility', [ProgramController::class, 'toggleVisibility'])->name('program.destroy');
      // blog
      Route::get('/blog', [BlogController::class, 'index'])->name('blog');
      Route::get('/blog/tambah', [BlogController::class, 'create'])->name('blog.create');
      Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
      Route::get('/blog/{id}/detail', [BlogController::class, 'show'])->name('blog.show');
      Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
      Route::post('/blog/{id}/update', [BlogController::class, 'update'])->name('blog.update');
      Route::get('/blog/{id}/delete', [BlogController::class, 'destroy'])->name('blog.delete');
      Route::get('/blog/visibility/{id}', [BlogController::class, 'toggleVisibility'])->name('blog.toggleVisibility');
    });

    // mod
    Route::name('mod.')
    ->prefix('mod')
    // ->middleware(['permission:mod'])
    ->group(function () {
      Route::get('/dashboard', [DashboardController::class, 'index'])->name('');
    //   Route::get('/users', ModUsersController::class)->name('');
    });

    // member
    Route::name('member.')
    ->prefix('member')
    // ->middleware(['permission:member'])
    ->group(function () {
      Route::get('/dashboard', [DashboardController::class, 'index'])->name('');
    });

    // media
    Route::name('media.')
    ->prefix('media')
    // ->middleware(['permission:media'])
    ->group(function () {
      Route::get('/dashboard', [DashboardController::class, 'index'])->name('');
      Route::get('/blog', [BlogController::class, 'index'])->name('blog');
      Route::get('/blog/tambah', [BlogController::class, 'create'])->name('blog.create');
      Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
      Route::get('/gallery/tambah', [GalleryController::class, 'create'])->name('gallery.create');
      Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
      Route::get('/gallery/{id}/detail', [GalleryController::class, 'show'])->name('gallery.detail');
      Route::get('/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
      Route::post('/gallery/update', [GalleryController::class, 'update'])->name('gallery.update');
      Route::get('/news', [NewsCrawlerController::class, 'index'])->name('news');
      Route::get('/news/tambah', [NewsCrawlerController::class, 'create'])->name('news.create');
      Route::post('/news/preview', [NewsCrawlerController::class, 'preview'])->name('news.preview');
      Route::post('/news/store', [NewsCrawlerController::class, 'store'])->name('news.store');
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
