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

Route::middleware(['auth', 'role:staff_tu'])->get('/dashboard', [StaffTataUsahaController::class, 'index'])->name('dashboard');
// Route::middleware(['auth', 'role:staff_tu'])->get('/dad', [StaffTataUsahaController::class, 'dad'])->name('dashboard');
// Route untuk mengambil data siswa
Route::get('/students', [StaffTataUsahaController::class, 'getStudents'])->name('students.index');
Route::get('/manajemen-siswa', [StaffTataUsahaController::class, 'manajemenSiswa'])->name('manajemen-siswa');

// Route untuk mengambil data guru
Route::get('/get-data', [StaffTataUsahaController::class, 'getData'])->name('getData');

Route::get('/unauthorized', function () {
    return view('unauthorized');
});
Route::get('/tes', function () {
    return view('dashboard.staff-tu-dashboard');
});