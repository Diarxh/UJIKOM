<?php

use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/login', [UserManagementController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserManagementController::class, 'login']);
Route::post('/logout', [UserManagementController::class, 'logout'])->name('logout');

// Jika registrasi diaktifkan:
Route::get('/register', [UserManagementController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserManagementController::class, 'register']);

Route::get('/dashboard', [UserManagementController::class, 'dashboard'])->middleware('auth')->name('dashboard');
