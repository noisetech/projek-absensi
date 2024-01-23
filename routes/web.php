<?php

use App\Http\Controllers\DapertemenController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JamKerjaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LokasiKantorController;
use App\Http\Controllers\MonitroingPresensiController;
use App\Http\Controllers\PresensiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('presensi', [PresensiController::class, 'create'])
    ->name('presensi');
Route::post('simpan/presensi', [PresensiController::class, 'simpan'])
    ->name('presensi.simpan');



Route::prefix('dashboard-admin')->group(function () {
    Route::get('/', [DashboardAdminController::class, 'index'])
        ->name('dashboard_admin');


    // monitoring presensi
    Route::get('monitoring-presensi', [MonitroingPresensiController::class, 'index'])
        ->name('monitoring_presensi');


    Route::get('lokasi-kantor', [LokasiKantorController::class, 'index'])
        ->name('lokasi_kantor');
    Route::get('lokasi-kantor/tambah', [LokasiKantorController::class, 'tambah'])
        ->name('lokasi_kantor.tambah');
    Route::post('lokasi-kantor/simpan', [LokasiKantorController::class, 'simpan'])
        ->name('lokasi_kantor.simpan');

    Route::get('dapertemen', [DapertemenController::class, 'index'])
        ->name('dapertemen');
    Route::get('dapertemen/tambah', [DapertemenController::class, 'tambah'])
        ->name('dapertemen.tambah');
    Route::post('dapertemen/simpan', [DapertemenController::class, 'simpan'])
        ->name('dapertemen.simpan');


    // jam kerja
    Route::get('jam-kerja', [JamKerjaController::class, 'index'])
        ->name('jam_kerja');
    Route::get('jam-kerja/tambah', [JamKerjaController::class, 'tambah'])
        ->name('jam_kerja.tambah');
    Route::post('jam-kerja/simpan', [JamKerjaController::class, 'simpan'])
        ->name('jam_kerja.simpan');


    // karyawan
    Route::get('karyawan', [KaryawanController::class, 'index'])
        ->name('karyawan');
    Route::get('karyawan/tambah', [KaryawanController::class, 'tambah'])
        ->name('karyawan.tambah');
    Route::post('karyawan/simpan', [KaryawanController::class, 'simpan'])
        ->name('karyawan.simpan');
    Route::get('karyawan/edit/{id}', [KaryawanController::class, 'edit'])
        ->name('karyawan.edit');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
