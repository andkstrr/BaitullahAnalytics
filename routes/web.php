<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::prefix('/analytics')->name('analytics.')->group(function () {
    Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/trafik', [PageController::class, 'trafik_website'])->name('trafik');
    Route::get('/notifikasi', [PageController::class, 'notifikasi'])->name('notifikasi');
    Route::get('/pengunjung#history', [PageController::class, 'history_pengunjung'])->name('history');

    // PAGES
    Route::prefix('/pengunjung')->name('pengunjung.')->group(function () {
        Route::get('/', [PageController::class, 'pengunjung'])->name('all');
        Route::get('/total Pengunjung', [PageController::class, 'total_pengunjung'])->name('total');
        Route::get('/pengunjung Hari Ini', [PageController::class, 'pengunjung_hari_ini'])->name('hari_ini');
        Route::get('/pengunjung Aktif', [PageController::class, 'pengunjung_aktif'])->name('aktif');
    });
});
