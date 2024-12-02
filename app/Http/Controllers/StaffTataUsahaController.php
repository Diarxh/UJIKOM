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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class StaffTataUsahaController extends Controller
{
    // TAMPILAN DASHBOARD

    public function index(Request $request)
    {
        // Data untuk chart SPP (contoh: jumlah pembayaran per bulan)
        $sppData = DB::table('spp')
            ->selectRaw('MONTH(tanggal_bayar) AS month, SUM(jumlah_bayar) AS total')
            ->groupBy(DB::raw('MONTH(tanggal_bayar)'))
            ->orderBy('month')
            ->get();

        // Data untuk chart Gaji Guru
        $gajiData = SlipGajiGuru::selectRaw('MONTH(tanggal_pembayaran) as month, SUM(total_gaji) as total')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Total siswa, guru, slip gaji, dan absensi
        $siswaCount = Student::count();
        $guruCount = Teacher::count();
        $slipGajiCount = User::count();
        $absensiSiswaCount = Attendance::count();
        $absensiGuruCount = Attendance::count();
        // Data absensi siswa per hari dalam seminggu
        $siswaCountPerDay = Attendance::selectRaw('DAYOFWEEK(date) as day_of_week, COUNT(*) as count')
            ->whereNotNull('student_id') // Hanya absensi siswa
            ->whereBetween('date', [now()->startOfWeek()->format('Y-m-d'), now()->endOfWeek()->format('Y-m-d')])
            ->groupBy('day_of_week')
            ->orderBy('day_of_week')
            ->get()
            ->mapWithKeys(function ($item) {
                $days = [
                    1 => 'Minggu',
                    2 => 'Senin',
                    3 => 'Selasa',
                    4 => 'Rabu',
                    5 => 'Kamis',
                    6 => 'Jumat',
                    7 => 'Sabtu'
                ];
                return [$days[$item->day_of_week] => intval($item->count)];
            })
            ->toArray();

        // Isi nilai nol untuk hari yang kosong
        $siswaCountPerDay = collect([
            'Senin' => 0,
            'Selasa' => 0,
            'Rabu' => 0,
            'Kamis' => 0,
            'Jumat' => 0,
            'Sabtu' => 0
        ])->merge($siswaCountPerDay)->toArray();

        // Data absensi guru per hari dalam seminggu
        $guruCountPerDay = Attendance::selectRaw('DAYOFWEEK(date) as day_of_week, COUNT(*) as count')
            ->whereNotNull('teacher_id') // Hanya absensi guru
            ->whereBetween('date', [now()->startOfWeek()->format('Y-m-d'), now()->endOfWeek()->format('Y-m-d')])
            ->groupBy('day_of_week')
            ->orderBy('day_of_week')
            ->get()
            ->mapWithKeys(function ($item) {
                $days = [
                    1 => 'Minggu',
                    2 => 'Senin',
                    3 => 'Selasa',
                    4 => 'Rabu',
                    5 => 'Kamis',
                    6 => 'Jumat',
                    7 => 'Sabtu'
                ];
                return [$days[$item->day_of_week] => intval($item->count)];
            })
            ->toArray();

        // Isi nilai nol untuk hari yang kosong
        $guruCountPerDay = collect([
            'Senin' => 0,
            'Selasa' => 0,
            'Rabu' => 0,
            'Kamis' => 0,
            'Jumat' => 0,
            'Sabtu' => 0
        ])->merge($guruCountPerDay)->toArray();


        // Mengirim data ke view
        return view('dashboard.test', compact(
            'siswaCount',
            'guruCount',
            'slipGajiCount',
            'absensiSiswaCount',
            'absensiGuruCount',
            'sppData',
            'gajiData',
            'siswaCountPerDay',
            'guruCountPerDay'
        ));
    }

    public function getData(Request $request)
    {
        $type = $request->get('type');

        if ($type === 'students') {
            $data = Student::select('name', 'class_id', 'gender', 'created_at', 'phone')->get();
        } elseif ($type === 'teachers') {
            $data = Teacher::select('name', 'subject', 'gender', 'created_at', 'phone')->get();
        } else {
            return response()->json(['error' => 'Invalid type'], 400);
        }

        return response()->json($data);
    }


}