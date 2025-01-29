<?php

use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'home');
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

// Route untuk mengambil data guru
Route::get('/get-data', [StaffTataUsahaController::class, 'getData'])->name('getData');

Route::get('/unauthorized', function () {
    return view('unauthorized');
});
// routes/web.php
Route::get('/spa/{file}', [App\Http\Controllers\StaffTataUsahaController::class, 'menu']);
// GURU ROUTE
Route::get('/manajemen-guru', [App\Http\Controllers\StaffTataUsahaController::class, 'manajemenGuru']);
Route::post('/guru/tambah', [App\Http\Controllers\StaffTataUsahaController::class, 'storeGuru']);
Route::put('/guru/update/{id}', [App\Http\Controllers\StaffTataUsahaController::class, 'updateGuru']);
Route::get('/guru/{id}', [App\Http\Controllers\StaffTataUsahaController::class, 'getGuru']);
Route::delete('/guru/delete/{id}', [App\Http\Controllers\StaffTataUsahaController::class, 'deleteGuru']);
Route::get('/guru', [StaffTataUsahaController::class, 'getGuruAll']);

// API ROUTE
Route::get('/api/slip-gaji', [StaffTataUsahaController::class, 'getSlipGaji'])->name('api.slip-gaji');
Route::get('/api/slip-gaji/unpaid', [StaffTataUsahaController::class, 'getUnpaidSlipGaji'])->name('api.slip-gaji.unpaid');

// SISWA
// Route
Route::get('/manajemen-siswa', [App\Http\Controllers\StaffTataUsahaController::class, 'manajemenSiswa']);
Route::post('/siswa/tambah', [App\Http\Controllers\StaffTataUsahaController::class, 'storeSiswa']);
Route::put('/siswa/update/{id}', [App\Http\Controllers\StaffTataUsahaController::class, 'updateSiswa']);
Route::get('/siswa/{id}', [App\Http\Controllers\StaffTataUsahaController::class, 'getSiswa']);
Route::delete('/siswa/delete/{id}', [StaffTataUsahaController::class, 'deleteSiswa']);
Route::get('/siswa', [StaffTataUsahaController::class, 'getSiswaAll']);

// ENDSISWA
Route::get('/manajemen-kelas', 'StaffTataUsahaController@manajemenKelas');
Route::get('/manajemen-ekstrakurikuler', 'StaffTataUsahaController@manajemenEkstrakurikuler');
Route::get('/manajemen-keuangan', 'StaffTataUsahaController@manajemenKeuangan');
Route::get('/manajemen-laporan', 'StaffTataUsahaController@manajemenLaporan');
// Route::get('/dashboard', 'StaffTataUsahaController@dashboard');
