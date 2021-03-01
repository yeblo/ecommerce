<?php

use Illuminate\Support\Facades\Route;
use App\Resource\Views\products;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/prod', [App\Http\Controllers\ProductController::class, 'index']);

Route::get('/detail/{id}', [App\Http\Controllers\ProductController::class, 'detail']);

Route::get('/search', [App\Http\Controllers\ProductController::class, 'search']);

Route::post('/add_to_cart', [App\Http\Controllers\ProductController::class, 'addToCart']);

Route::get('/cartlist', [App\Http\Controllers\ProductController::class, 'cartList']);

Route::get('/removecart/{id}', [App\Http\Controllers\ProductController::class, 'removeCart']);