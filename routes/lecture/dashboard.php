<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lecture\DashboardController;

Route::controller(DashboardController::class)->group(function () {
    Route::prefix('dashboard')
        ->name('dashboard.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
        });
});
