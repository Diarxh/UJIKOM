<?php

use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/login', [UserManagementController::class, 'showLoginForm'])->name('login');
// Route untuk login
Route::post('/login', [UserManagementController::class, 'login'])->name('login');

// Route untuk registrasi
Route::post('register', [UserManagementController::class, 'register'])->name('register');

// Route::get('/dashboard', [StaffTataUsahaController::class, 'index'])->name('dashboard')->middleware('auth');


use App\Http\Controllers\StaffTataUsahaController;

Route::middleware(['auth', 'role:staff-tu'])->get('/dashboard', [StaffTataUsahaController::class, 'index'])->name('dashboard');
Route::get('/unauthorized', function () {
    return view('unauthorized');
});