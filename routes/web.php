<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home']);

Route::get('/products', [HomeController::class, 'products']);

Route::get('/where', [HomeController::class, 'where']);

Route::get('/testimonials', [HomeController::class, 'testimonials']);

Route::get('/galleries', [HomeController::class, 'gallery']);

Route::get('/blogs', [HomeController::class, 'blogs']);

Route::get('/blog/{id}', [HomeController::class, 'blog']);

Route::get('/contacts', [HomeController::class, 'contacts']);

Route::prefix('admin')->group(
  function () {
    Route::get('/news', [NewsController::class, 'index'])->middleware(['auth']);

    Route::get('/news/create', [NewsController::class, 'create'])->middleware(['auth']);

    Route::post('/news/store', [NewsController::class, 'store'])->middleware(['auth']);

    Route::get('/news/update-form/{id}', [NewsController::class, 'updateForm'])->middleware(['auth']);

    Route::post('/news/update', [NewsController::class, 'update'])->middleware(['auth']);

    Route::post('/news/delete', [NewsController::class, 'delete'])->middleware(['auth']);

    Route::get('/news/{id}', [NewsController::class, 'view'])->middleware(['auth']);

    Route::get('/gallery', [GalleryController::class, 'index'])->middleware(['auth']);

    Route::get('/gallery/create', [GalleryController::class, 'create'])->middleware(['auth']);

    Route::post('/gallery/store', [GalleryController::class, 'store'])->middleware(['auth']);

    Route::get('/gallery/update-form/{id}', [GalleryController::class, 'updateForm'])->middleware(['auth']);

    Route::post('/gallery/update', [GalleryController::class, 'update'])->middleware(['auth']);

    Route::post('/gallery/delete', [GalleryController::class, 'delete'])->middleware(['auth']);

    Route::get('/gallery/{id}', [GalleryController::class, 'view'])->middleware(['auth']);

    Route::get('/product', [ProductController::class, 'index'])->middleware(['auth']);

    Route::get('/product/create', [ProductController::class, 'create'])->middleware(['auth']);

    Route::post('/product/store', [ProductController::class, 'store'])->middleware(['auth']);

    Route::get('/product/update-form/{id}', [ProductController::class, 'updateForm'])->middleware(['auth']);

    Route::post('/product/update', [ProductController::class, 'update'])->middleware(['auth']);

    Route::post('/product/delete', [ProductController::class, 'delete'])->middleware(['auth']);

    Route::get('/product/{id}', [ProductController::class, 'view'])->middleware(['auth']);

    Route::get('/testimonial', [TestimonialController::class, 'index'])->middleware(['auth']);

    Route::get('/testimonial/create', [TestimonialController::class, 'create'])->middleware(['auth']);

    Route::post('/testimonial/store', [TestimonialController::class, 'store'])->middleware(['auth']);

    Route::get('/testimonial/update-form/{id}', [TestimonialController::class, 'updateForm'])->middleware(['auth']);

    Route::post('/testimonial/update', [TestimonialController::class, 'update'])->middleware(['auth']);

    Route::post('/testimonial/delete', [TestimonialController::class, 'delete'])->middleware(['auth']);

    Route::get('/testimonial/{id}', [TestimonialController::class, 'view'])->middleware(['auth']);
  }
);

require __DIR__ . '/auth.php';
