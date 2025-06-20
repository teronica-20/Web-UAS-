<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\DetailServicesController;
use App\Http\Controllers\api\JnsServicesController;
use App\Http\Controllers\api\JnsKendaraanController;
use App\Http\Controllers\api\KendaraanController;
use App\Http\Controllers\api\MekanikController;
use App\Http\Controllers\api\PemilikController;
use App\Http\Controllers\api\ServicesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route jnsKendaraan
Route::get('/jnsKendaraan', [JnsKendaraanController::class, 'index'])->name('jnsKendaraan.index');
Route::get('/jnsKendaraan/{id}', [JnsKendaraanController::class, 'show'])->name('jnsKendaraan.show');
Route::post('/jnsKendaraan', [JnsKendaraanController::class, 'store'])->name('jnsKendaraan.store');
Route::post('/jnsKendaraan/{id}', [JnsKendaraanController::class, 'update'])->name('jnsKendaraan.update');
Route::delete('/jnsKendaraan/{id}', [JnsKendaraanController::class, 'destroy'])->name('jnsKendaraan.destroy');

// Route detailService
Route::get('/detailServices', [DetailServicesController::class, 'index'])->name('detailServices.index');
Route::get('/detailServices/{id}', [DetailServicesController::class, 'show'])->name('detailServices.show');
Route::post('/detailServices', [DetailServicesController::class, 'store'])->name('detailServices.store');
Route::post('/detailServices/{id}', [DetailServicesController::class, 'update'])->name('detailServices.update');
Route::delete('/detailServices/{id}', [DetailServicesController::class, 'destroy'])->name('detailServices.destroy');

// Route jnsService
Route::get('/jnsServices', [JnsServicesController::class, 'index'])->name('jnsServices.index');
Route::get('/jnsServices/{id}', [JnsServicesController::class, 'show'])->name('jnsServices.show');
Route::post('/jnsServices', [JnsServicesController::class, 'store'])->name('jnsServices.store');
Route::post('/jnsServices/{id}', [JnsServicesController::class, 'update'])->name('jnsServices.update');
Route::delete('/jnsServices/{id}', [JnsServicesController::class, 'destroy'])->name('jnsServices.destroy');

// Route kendaraan
Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.index');
Route::get('/kendaraan/{id}', [KendaraanController::class, 'show'])->name('kendaraan.show');
Route::post('/kendaraan', [KendaraanController::class, 'store'])->name('kendaraan.store');
Route::post('/kendaraan/{id}', [KendaraanController::class, 'update'])->name('kendaraan.update');
Route::delete('/kendaraan/{id}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy');

// Route mekanik
Route::get('/mekanik', [MekanikController::class, 'index'])->name('mekanik.index');
Route::get('/mekanik/{id}', [MekanikController::class, 'show'])->name('mekanik.show');
Route::post('/mekanik', [MekanikController::class, 'store'])->name('mekanik.store');
Route::post('/mekanik/{id}', [MekanikController::class, 'update'])->name('mekanik.update');
Route::delete('/mekanik/{id}', [MekanikController::class, 'destroy'])->name('mekanik.destroy');

// Route pemilik
Route::get('/pemilik', [PemilikController::class, 'index'])->name('pemilik.index');
Route::get('/pemilik/{id}', [PemilikController::class, 'show'])->name('pemilik.show');
Route::post('/pemilik', [PemilikController::class, 'store'])->name('pemilik.store');
Route::post('/pemilik/{id}', [PemilikController::class, 'update'])->name('pemilik.update');
Route::delete('/pemilik/{id}', [PemilikController::class, 'destroy'])->name('pemilik.destroy');

// Route service
Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/services/{id}', [ServicesController::class, 'show'])->name('services.show');
Route::post('/services', [ServicesController::class, 'store'])->name('services.store');
Route::post('/services/{id}', [ServicesController::class, 'update'])->name('services.update');
Route::delete('/services/{id}', [ServicesController::class, 'destroy'])->name('services.destroy');