<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\MigratedPasswordController;


Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/katalog', [HomeController::class, 'katalog'])->name('katalog');
Route::get('/artikel', [HomeController::class, 'artikel'])->name('artikel');
Route::get('/artikel/{slug}', [HomeController::class, 'artikelDetail'])->name('artikel.detail');
Route::get('/admin', [HomeController::class, 'adminDashboard'])->name('admin.dashboard');


Route::get('/migrate-setup', [MigratedPasswordController::class, 'showSetupForm'])->name('password.migrate.setup');
Route::post('/migrate-setup', [MigratedPasswordController::class, 'storeNewPassword'])->name('password.migrate.store');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
