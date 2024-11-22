<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\SchoolClass;
use App\Models\Attendance;
use Illuminate\Http\Request;

class StaffTataUsahaController extends Controller
{
    public function index(Request $request)
    {
        // Mencari data total siswa, total kelas, dan absensi hari ini
        $totalStudents = Student::count();
        $totalClasses = SchoolClass::count();
        $totalAttendanceToday = Attendance::whereDate('date', today())->count();

        // Mengirim data ke view
        return view('staff-tu-dashboard', compact('totalStudents', 'totalClasses', 'totalAttendanceToday'));
    }


    // Tambahkan method CRUD lainnya seperti create, edit, delete
}