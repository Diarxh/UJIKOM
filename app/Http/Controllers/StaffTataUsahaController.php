<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\SchoolClass;
use App\Models\SlipGajiGuru;
use App\Models\SPP;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class StaffTataUsahaController extends Controller
{
    public function index(Request $request)
    {
        // Mencari data totalsiswa, total kelas, dan absensi hari ini
        // Data untuk chart SPP (contoh: jumlah pembayaran per bulan)
        $sppData = SPP::selectRaw('MONTH(tanggal_bayar) as month, SUM(jumlah_bayar) as total')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $gajiData = SlipGajiGuru::selectRaw('MONTH(tanggal_pembayaran) as month, SUM(total_gaji) as total')
            ->groupBy('month')
            ->orderBy('month')
            ->get();
        // dd($gajiData);
        $siswaCount = Student::count();
        $guruCount = Teacher::count();
        $slipGajiCount = User::count();
        $absensiSiswaCount = Attendance::count();
        $absensiGuruCount = Attendance::count();

        // Mengirim data ke view
        return view('dashboard.staff-tu-dashboard', compact('siswaCount', 'guruCount', 'slipGajiCount', 'absensiSiswaCount', 'absensiGuruCount', 'sppData', 'gajiData'));
    }


    // Tambahkan method CRUD lainnya seperti create, edit, delete
}