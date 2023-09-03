<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
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

Route::get('/product', function () {
    return view('product.index');
});

Route::get('/news', [NewsController::class, 'index'])->middleware(['auth']);

Route::get('/news/create', [NewsController::class, 'create'])->middleware(['auth']);

Route::post('/news/store', [NewsController::class, 'store'])->middleware(['auth']);

Route::get('/news/update-form/{id}', [NewsController::class, 'updateForm'])->middleware(['auth']);

Route::post('/news/update', [NewsController::class, 'update'])->middleware(['auth']);

Route::post('/news/delete', [NewsController::class, 'delete'])->middleware(['auth']);

Route::get('/news/{id}', [NewsController::class, 'view'])->middleware(['auth']);

require __DIR__ . '/auth.php';
