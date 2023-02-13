<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['', '', '']
], function () {
    Route::group(['prefix' => 'admin'], function () {
        // User Routes
        Route::get('home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');

    });
});
