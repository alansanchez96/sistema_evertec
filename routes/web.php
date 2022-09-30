<?php

use App\Http\Controllers\ProductController;
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

Route::controller(ProductController::class)
    ->group(function(){
        Route::get('/products', 'index')->name('product.index');
        Route::get('/product/crear-orden/{product}', 'show')->name('product.show');
        Route::post('/product/crear-orden', 'store')->name('product.store');
    });