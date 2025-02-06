<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'app'])->name('home');

// baitullah.co.id
Route::prefix('/BCI')->name('BCI.')->group(function () {
    Route::prefix('/analytics')->name('analytics.')->group(function () {
        Route::get('/', [PageController::class, 'dashboardBCI'])->name('dashboard');
        Route::get('/notifikasi', [PageController::class, 'notifikasi'])->name('notifikasi');
    });
});

