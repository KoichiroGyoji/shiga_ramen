<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController; 
use App\Http\Controllers\CityController;

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

Route::get('/', [ShopController::class, 'index'])->name('shops.index');

Route::get('/show/{id}', [ShopController::class, 'show'])->name('shops.show');

Route::get('/create/{id}', [ShopController::class, 'create'])->name('shops.create');

Route::post('/create/{id}', [ShopController::class, 'store'])->name('shops.posts');;

Route::get('searchproduct', 'App\Http\Controllers\ShopController@search')->name('searchproduct');