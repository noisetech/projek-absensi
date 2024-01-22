<?php

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryawanController;
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
    return redirect()->route('login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');



Route::prefix('dashboard-admin')->group(function () {
    Route::get('/', [DashboardAdminController::class, 'index'])
        ->name('dashboard_admin');


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
