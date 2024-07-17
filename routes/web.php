<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::group(['middleware' => ['role:admin', 'auth']], function () {
    Route::prefix('admin')->name('admin.')->group(function () {

        // Dashboard
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
