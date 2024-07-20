<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\JurusanController;
use App\Http\Controllers\DashboardController;

Route::group(['middleware' => ['role:admin', 'auth']], function () {
    Route::prefix('admin')->name('admin.')->group(function () {

        // Dashboard
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


        // Mahasiswa
        Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
        Route::get('mahasiswa/tambah', [MahasiswaController::class, 'create'])->name('mahasiswa.tambah');
        Route::delete('mahasiswa/{id}', [MahasiswaController::class, 'destrory'])->name('mahasiswa.hapus');
        Route::post('mahasiswa/storage', [MahasiswaController::class, 'storage'])->name('mahasiswa.storage');
        Route::get('mahasiswa/{id}/ubah', [MahasiswaController::class, 'edit'])->name('mahasiswa.ubah');
        Route::put('mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');



    });
});
