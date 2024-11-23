<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\SchoolClass;
use App\Models\Attendance;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class StaffTataUsahaController extends Controller
{
    public function index(Request $request)
    {
        // Mencari data total siswa, total kelas, dan absensi hari ini
        $siswaCount = Student::count();
        $guruCount = Teacher::count();
        $slipGajiCount = User::count();
        $absensiSiswaCount = Attendance::count();
        $absensiGuruCount = Attendance::count();

        // Mengirim data ke view
        return view('dashboard.staff-tu-dashboard', compact('siswaCount', 'guruCount', 'slipGajiCount', 'absensiSiswaCount', 'absensiGuruCount'));
    }


    // Tambahkan method CRUD lainnya seperti create, edit, delete
}