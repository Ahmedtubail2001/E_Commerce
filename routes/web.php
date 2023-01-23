<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Auth;
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

Route::get('dashboard', function () {
    return view('layouts.parent');
})->middleware('auth');

Route::resource('store', StoreController::class)->middleware('auth');
Route::resource('product', ProductController::class)->middleware('auth');

Route::get('', 'App\Http\Controllers\WebsiteController@index');
Route::get('website/product/{id}', 'App\Http\Controllers\WebsiteController@indexProduct');
Route::post('website/product/search', 'App\Http\Controllers\WebsiteController@searchProduct');

Route::get('/transactions/details', 'App\Http\Controllers\TransactionController@report')->name('productDetail');

Route::get('transactions/index', 'App\Http\Controllers\TransactionController@index');
Route::get('transaction/store/{id}', 'App\Http\Controllers\TransactionController@store');

Auth::routes();