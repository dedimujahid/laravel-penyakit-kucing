<?php

use App\Http\Controllers\KonsultasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeteksiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PrintPDFController;

// Rute untuk user
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Rute untuk mengakses form deteksi
    // Route::get('/deteksi', [DeteksiController::class, 'showForm'])->name('deteksi.form');
    // Route::post('/deteksi', [DeteksiController::class, 'deteksi'])->name('deteksi.deteksi');

    // Rute untuk pencarian artikel
    Route::get('/artikel/search', [ArtikelController::class, 'searchArtikel'])->name('artikel.search');
    // Rute untuk manajemen data artikel
    Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index-user');
    Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show-user');

    Route::get('/konsultasi', [KonsultasiController::class, 'showForm'])->name('konsultasi.form');
    Route::post('/konsultasi', [KonsultasiController::class, 'prosesKonsultasi'])->name('konsultasi.proses');
    Route::get('/konsultasi/hasil/{id}', [KonsultasiController::class, 'showHasilKonsultasi'])->name('konsultasi.hasil');

    Route::get('/riwayat_konsultasi', [KonsultasiController::class, 'showRiwayatKonsultasi'])->name('riwayat_konsultasi');

    //PrintPDF
    Route::get('/print_pdf/{id}', [PrintPDFController::class, 'printPDF'])->name('print_pdf');
    Route::get('/print_all_pdf', [PrintPDFController::class, 'printAllPDF'])->name('print_all_pdf');

    // Tambahkan rute lain yang diizinkan untuk user di sini
});

  // Rute untuk admin
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    // Rute untuk dashboard admin
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Rute untuk manajemen data deteksi
    // Route::get('/deteksi', [DeteksiController::class, 'showForm'])->name('deteksi.form');
    // Route::post('/deteksi', [DeteksiController::class, 'deteksi'])->name('deteksi.deteksi');

    // Rute untuk manajemen data artikel
    Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index-admin');
    Route::get('/artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');
    Route::post('/artikel', [ArtikelController::class, 'store'])->name('artikel.store');
    Route::get('/artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');
    Route::put('/artikel/{id}', [ArtikelController::class, 'update'])->name('artikel.update');
    Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');
    Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');

    // Rute untuk pencarian artikel
    Route::get('/artikel/search', [ArtikelController::class, 'search'])->name('artikel.search');

    // Tambahkan rute lain yang diperlukan untuk admin di sini
});

// Rute untuk semua user (tanpa memeriksa peran)
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk auth dan manajemen data artikel (untuk user dan admin)
Auth::routes();
