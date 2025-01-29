<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::prefix('/analytics')->name('analytics.')->group(function () {
    Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/total_pengunjung', [PageController::class, 'total_pengunjung'])->name('total_pengunjung');
    Route::get('/total_pengunjung_aktif', [PageController::class, 'total_pengunjung_aktif'])->name('total_pengunjung_aktif');
    // Route::get('/traffic', [PageController::class, 'traffic_website'])->name('traffic_website');
    Route::get('/notifikasi', [PageController::class, 'notifikasi'])->name('notifikasi');
});
