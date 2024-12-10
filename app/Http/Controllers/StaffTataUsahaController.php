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

        // Data Absensi Siswa per Hari
        $siswaCountPerDay = Attendance::selectRaw('DAYOFWEEK(date) as day_of_week, COUNT(*) as count')
            ->whereNotNull('student_id')
            ->whereBetween('date', [now()->startOfWeek(), now()->endOfWeek()])
            ->groupBy('day_of_week')
            ->orderBy('day_of_week')
            ->get()
            ->mapWithKeys(function ($item) {
                $days = [
                    2 => 'Senin', 3 => 'Selasa', 4 => 'Rabu', 5 => 'Kamis', 6 => 'Jumat', 7 => 'Sabtu'
                ];
                return [$days[$item->day_of_week] => intval($item->count)];
            })
            ->toArray();  // Convert to array

        // Data Absensi Guru per Hari
        $guruCountPerDay = Attendance::selectRaw('DAYOFWEEK(date) as day_of_week, COUNT(*) as count')
            ->whereNotNull('teacher_id')
            ->whereBetween('date', [now()->startOfWeek(), now()->endOfWeek()])
            ->groupBy('day_of_week')
            ->orderBy('day_of_week')
            ->get()
            ->mapWithKeys(function ($item) {
                $days = [
                    2 => 'Senin', 3 => 'Selasa', 4 => 'Rabu', 5 => 'Kamis', 6 => 'Jumat', 7 => 'Sabtu'
                ];
                return [$days[$item->day_of_week] => intval($item->count)];
            })
            ->toArray();  // Convert to array

        // Mengirim data ke view
        return view('dashboard.staff-tu-dashboard', compact(
            'siswaCount', 'guruCount',
            'slipGajiCount', 'absensiSiswaCount', 'absensiGuruCount',
            'sppData', 'gajiData',
            'siswaCountPerDay', 'guruCountPerDay'
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
    // dalam file controller StaffTataUsahaController.php

    public function menu($file)
    {
        if ($file == 'manajemen-guru') {
            $data = $this->manajemenGuru();
            return view('resource.' . $file . '.index', compact('data'));
        } elseif ($file == 'manajemen-siswa') {
            $data = $this->manajemenSiswa();
            return view('resource.' . $file . '.index', compact('data'));
        } elseif ($file == 'manajemen-kelas') {
            $data = $this->manajemenKelas();
            return view('resource.' . $file . '.index', compact('data'));
        } elseif ($file == 'manajemen-ekstrakurikuler') {
            $data = $this->manajemenEkstrakurikuler();
            return view('resource.' . $file . '.index', compact('data'));
        } elseif ($file == 'manajemen-keuangan') {
            $data = $this->manajemenKeuangan();
            return view('resource.' . $file . '.index', compact('data'));
        } elseif ($file == 'manajemen-laporan') {
            $data = $this->manajemenLaporan();
            return view('resource.' . $file . '.index', compact('data'));
        } elseif ($file == 'dashboard') {
            $data = $this->dashboard();
            return view('resource.' . $file . '.index', compact('data'));
        } else {
            return view('resource.' . $file . '.index');
        }
    }

    public function manajemenGuru()
    {
        $data = Teacher::all();
        return $data;
    }

    public function manajemenSiswa()
    {
        $data = Student::all();
        return $data;
    }

    public function manajemenKelas()
    {
        $data = SchoolClass::all();
        return $data;
    }

    public function manajemenEkstrakurikuler()
    {
        $data = Attendance::all();
        return $data;
    }

    public function manajemenKeuangan()
    {
        $data = spp::all();
        return $data;
    }

    public function manajemenLaporan()
    {
        $data = SlipGajiGuru::all();
        return $data;
    }

    public function dashboard()
    {
        $data = Dashboard::all();
        return $data;
    }
}
