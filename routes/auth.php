<?php

use App\Http\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::prefix('auth')
    ->name('auth.')
    ->group(function () {
        Route::get('login', Login::class)->name('login');
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    });
