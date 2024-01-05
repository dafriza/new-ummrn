<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::controller(DashboardController::class)->group(function () {
    Route::prefix('dashboard')
        ->name('dashboard.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
        });
});
Route::controller(UserController::class)->group(function () {
    Route::prefix('user')
        ->name('user.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update', 'update')->name('update');
        });
});
