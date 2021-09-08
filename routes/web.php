<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index']);
Route::get('/detail/{id}', [App\Http\Controllers\ProductsController::class, 'detail']);
Route::post('/add_to_cart', [App\Http\Controllers\ProductsController::class, 'addToCart']);
Route::get('/cartlist', [App\Http\Controllers\ProductsController::class, 'cartList']);
Route::get('/products/search/{search}', [App\Http\Controllers\ProductsController::class, 'search']);
Route::get('/removecart/{id}', [App\Http\Controllers\ProductsController::class, 'removeCart']);
Route::get('/ordernow', [App\Http\Controllers\ProductsController::class, 'OrderNow']);
Route::post('/orderplace', [App\Http\Controllers\ProductsController::class, 'orderplace']);
Route::get('/myorders', [App\Http\Controllers\ProductsController::class, 'myorders']);