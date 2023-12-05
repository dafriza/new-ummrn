<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::controller(AuthController::class)->name('auth.')->group(function () {
    Route::get('login', 'login')->name('login');
});
