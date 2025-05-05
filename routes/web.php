<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\LogController;

Route::middleware(['isLogin'])->group(function () {
    Route::get('/create-user', [LogController::class, 'create'])->name('user.create');
    Route::post('/create-user', [LogController::class, 'store'])->name('user.store');
    Route::get('/logout', [LogController::class, 'logout'])->name('logout');

    Route::prefix('/analytics')->name('analytics.')->group(function () {
        Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');
        Route::get('/notification', [PageController::class, 'notification'])->name('notification');
        Route::get('/report', [PageController::class, 'report'])->name('report');

        // MONITORING
        Route::prefix('/monitoring')->name('monitoring.')->group(function () {
            Route::get('/', [PageController::class, 'monitoring'])->name('dashboard');
            Route::get('/users', [PageController::class, 'monitoring_users'])->name('users');
            Route::get('/application', [PageController::class, 'monitoring_application'])->name('application');
        });

        // MERCHANT
        Route::prefix('/merchant')->name('merchant.')->group(function () {
            Route::get('/', [MerchantController::class, 'dashboard'])->name('dashboard');
            Route::put('/{merchant}/update-status', [MerchantController::class, 'updateStatus'])->name('update-status');
            Route::get('/add', [MerchantController::class, 'create'])->name('create');
            Route::post('/add', [MerchantController::class, 'store'])->name('store');
            Route::get('/location', [MerchantController::class, 'location'])->name('location');
        });
    });
});

Route::middleware(['isLogout'])->group(function () {
    Route::get('/', [LogController::class, 'showLoginForm'])->name('home');
    Route::post('/login', [LogController::class, 'login'])->name('login');
});
