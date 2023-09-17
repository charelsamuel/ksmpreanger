<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\homeController;
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

Route::get('/', [homeController::class, 'home']);

Route::get('/product', function () {
    return view('product.index');
});

Route::get('/about', [homeController::class, 'about']);

Route::get('/galleries', [homeController::class, 'gallery']);

Route::get('/products', [homeController::class, 'products']);

Route::get('/where', [homeController::class, 'where']);

Route::get('/testimonials', [homeController::class, 'testimonials']);

Route::get('/blogs', [homeController::class, 'blogs']);

Route::get('/blog/{id}', [homeController::class, 'blog']);

Route::get('/contacts', [homeController::class, 'contacts']);

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

require __DIR__ . '/auth.php';
