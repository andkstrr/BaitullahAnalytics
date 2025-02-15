<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', [PageController::class, 'app'])->name('home');

// baitullah.co.id
Route::prefix('/BCI')->name('BCI.')->group(function () {
    Route::prefix('/analytics')->name('analytics.')->group(function () {
        Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');
        Route::get('/notification', [PageController::class, 'notification'])->name('notification');
        Route::get('/report', [PageController::class, 'report'])->name('report');

        // MONITORING BCI
        Route::prefix('/monitoring')->name('monitoring.')->group(function () {
            Route::get('/', [PageController::class, 'monitoring'])->name('dashboard');
            Route::get('/users', [PageController::class, 'monitoring_users'])->name('users');
            Route::get('/application', [PageController::class, 'monitoring_application'])->name('application');
        });
    });
});

