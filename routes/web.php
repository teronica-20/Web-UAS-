<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailServiceController;
use App\Http\Controllers\JnsKendaraanController;
use App\Http\Controllers\JnsServiceController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\MekanikController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('dashboard'); // ganti ke view('welcome') jika pakai default
})->name('home');

// Jenis Kendaraan
Route::prefix('jnskendaraan')->name('jnsKendaraan.')->group(function () {
    Route::get('/', [JnsKendaraanController::class, 'index'])->name('index');
    Route::get('/add', [JnsKendaraanController::class, 'create'])->name('create');
    Route::post('/add', [JnsKendaraanController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [JnsKendaraanController::class, 'edit'])->name('edit');
    Route::post('/edit/{id}', [JnsKendaraanController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [JnsKendaraanController::class, 'destroy'])->name('delete');
});

// Detail Service
Route::resource('detailservice', DetailServiceController::class)->except(['show']);

// Jenis Service
Route::resource('jenisservice', JnsServiceController::class)->except(['show']);

// Kendaraan
Route::resource('kendaraan', KendaraanController::class)->except(['show']);

// Mekanik
Route::resource('mekanik', MekanikController::class)->except(['show']);

// Pemilik
Route::resource('pemilik', PemilikController::class)->except(['show']);

// Service
Route::resource('service', ServiceController::class)->except(['show']);
