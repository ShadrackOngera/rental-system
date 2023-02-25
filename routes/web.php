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

////Global routes
//Route::resource('offers', \App\Http\Controllers\Seller\OfferController::class);

// Admin Routes
Route::group(['prefix' => 'admin'], function () {
    Route::get('home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
    Route::get('unpublished', [App\Http\Controllers\Seller\OfferController::class, 'index'])->name('offer.index');

});


// Seller Routes
Route::group(['prefix' => 'seller'], function () {
    Route::get('home', [App\Http\Controllers\Seller\HomeController::class, 'index'])->name('seller.home');
    Route::get('create', [\App\Http\Controllers\Seller\OfferController::class, 'create'])->name('offer.create');
    Route::post('store', [\App\Http\Controllers\Seller\OfferController::class, 'store'])->name('offer.store');
    Route::delete('offer/{id}/destroy', [\App\Http\Controllers\Seller\OfferController::class, 'destroy'])->name('offer.destroy');

});
