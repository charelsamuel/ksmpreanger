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

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/product', function () {
    return view('product.index');
});

Route::get('/news', [NewsController::class, 'index']);

Route::get('/news/create', [NewsController::class, 'create']);

Route::post('/news/store', [NewsController::class, 'store']);
