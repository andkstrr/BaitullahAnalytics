<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::prefix('/analytics')->name('analytics.')->group(function () {
    Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/pengunjung', [PageController::class, 'pengunjung'])->name('pengunjung');
    Route::get('/total_pengunjung', [PageController::class, 'total_pengunjung'])->name('total_pengunjung');
    Route::get('/pengunjung_hari_ini', [PageController::class, 'pengunjung_hari_ini'])->name('pengunjung_hari_ini');
    Route::get('/pengunjung_aktif', [PageController::class, 'pengunjung_aktif'])->name('pengunjung_aktif');
    Route::get('/pengunjung#history', [PageController::class, 'history_pengunjung'])->name('pengunjung#history');
    Route::get('/trafik', [PageController::class, 'trafik_website'])->name('trafik');
    Route::get('/notifikasi', [PageController::class, 'notifikasi'])->name('notifikasi');
});
