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
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

// use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class copy_staff_tu extends Controller
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
                    2 => 'Senin',
                    3 => 'Selasa',
                    4 => 'Rabu',
                    5 => 'Kamis',
                    6 => 'Jumat',
                    7 => 'Sabtu'
                ];
                return [$days[$item->day_of_week] => $item->count];
            })
            ->toArray();

        $guruCountPerDay = Attendance::selectRaw('DAYOFWEEK(date) as day_of_week, COUNT(*) as count')
            ->whereNotNull('teacher_id')
            ->whereBetween('date', [now()->startOfWeek(), now()->endOfWeek()])
            ->groupBy('day_of_week')
            ->orderBy('day_of_week')
            ->get()
            ->mapWithKeys(function ($item) {
                $days = [
                    2 => 'Senin',
                    3 => 'Selasa',
                    4 => 'Rabu',
                    5 => 'Kamis',
                    6 => 'Jumat',
                    7 => 'Sabtu'
                ];
                return [$days[$item->day_of_week] => $item->count];
            })
            ->toArray();

        // Mengirim data ke view
        return view('dashboard.staff-tu-dashboard', compact(
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
    // dalam file controller StaffTataUsahaController.php

    // app/Http/Controllers/StaffTataUsahaController.php
    public function menu($file)
    {
        if ($file == 'manajemen-guru') {
            return $this->manajemenGuru();
        } elseif ($file == 'manajemen-siswa') {
            return $this->manajemenSiswa();
        } elseif ($file == 'manajemen-kelas') {
            return $this->manajemenKelas();
        } elseif ($file == 'manajemen-ekstrakurikuler') {
            return $this->manajemenEkstrakurikuler();
        } elseif ($file == 'manajemen-keuangan') {
            return $this->manajemenKeuangan();
        } elseif ($file == 'manajemen-laporan') {
            return $this->manajemenLaporan();
        } else {
            return view('resource.' . $file . '.index');
        }
    }

    public function manajemenGuru()
    {
        try {
            // Ambil data guru
            $students = Student::with(['class', 'grades'])->get();
            // Ambil data guru

            // Hitung rata-rata nilai untuk setiap siswa
            $ranking = $students->map(function ($student) {
                $averageGrade = $student->grades->avg('grade');
                return [
                    'name' => $student->name,
                    'class' => $student->class->name ?? 'N/A',
                    'average_grade' => $averageGrade,
                ];
            })->sortByDesc('average_grade')->values()->take(5);
            // Ambil data slip gaji guru
            $slipGajiGuru = SlipGajiGuru::with('guru')->get();  // Mengambil data slip gaji beserta data guru

            $teachers = Teacher::with('classes')->get();
            // Hitung persentase untuk setiap guru pada pelajaran masing-masing
            $subjects = Teacher::select('subject')->get();

            $subjectCounts = [];

            foreach ($subjects as $subject) {
                $subjectsList = explode(',', $subject->subject);
                foreach ($subjectsList as $sub) {
                    if (isset($subjectCounts[$sub])) {
                        $subjectCounts[$sub]++;
                    } else {
                        $subjectCounts[$sub] = 1;
                    }
                }
            }
            arsort($subjectCounts);
            // $subjectCounts = [];
            $guruCounts = [];

            foreach ($subjectCounts as $subject => $count) {
                $guruCounts[$subject] = Teacher::where('subject', $subject)->count();
            }

            // Menghitung statistik lainnya
            $jumlahSiswa = Student::count();
            $jumlahGuru = Teacher::count();
            $jumlahKelas = SchoolClass::count();
            $jumlahFakultas = 3;  // default untuk kasus ini

            // Kelas yang ada untuk ditampilkan
            $schoolClasses = SchoolClass::all();

            // Mengembalikan tampilan dengan data siswa, ranking, dan slip gaji
            return view('resource.manajemen-guru.index', compact('students', 'subjects', 'subjectCounts', 'teachers', 'schoolClasses', 'ranking', 'jumlahSiswa', 'jumlahGuru', 'jumlahKelas', 'jumlahFakultas', 'slipGajiGuru', 'guruCounts'));
        } catch (\Exception $e) {
            // Log kesalahan
            \Log::error('Error in manajemenGuru: ' . $e->getMessage());
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function storeGuru(Request $request)
    {
        try {
            $guru = new Teacher();
            $guru->nama = $request->input('nama');
            $guru->mata_pelajaran = $request->input('mata_pelajaran');
            $guru->jenis_kelamin = $request->input('jenis_kelamin');
            $guru->tanggal_bergabung = $request->input('tanggal_bergabung');
            $guru->no_telepon = $request->input('no_telepon');
            $guru->email = $request->input('email');
            $guru->gaji_pokok = $request->input('gaji_pokok');
            $guru->tunjangan = $request->input('tunjangan');
            $guru->potongan = $request->input('potongan');
            $guru->save();
            return response()->json(['message' => 'Data guru berhasil ditambahkan']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function updateGuru(Request $request, $id)
    {
        try {
            $guru = Teacher::find($id);
            $guru->nama = $request->input('nama');
            $guru->mata_pelajaran = $request->input('mata_pelajaran');
            $guru->jenis_kelamin = $request->input('jenis_kelamin');
            $guru->tanggal_bergabung = $request->input('tanggal_bergabung');
            $guru->no_telepon = $request->input('no_telepon');
            $guru->email = $request->input('email');
            $guru->gaji_pokok = $request->input('gaji_pokok');
            $guru->tunjangan = $request->input('tunjangan');
            $guru->potongan = $request->input('potongan');
            $guru->save();
            return response()->json(['message' => 'Data guru berhasil diupdate']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function deleteGuru($id)
    {
        try {
            $guru = Teacher::find($id);
            $guru->delete();
            return response()->json(['message' => 'Data guru berhasil dihapus']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function getGuru()
    {
        try {
            $guru = Teacher::all();
            return response()->json($guru);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function getSlipGaji()
    {
        $slipGajiGuru = SlipGajiGuru::with('guru')->get();  // Ambil data slip gaji beserta guru

        return response()->json($slipGajiGuru);
    }

    public function getUnpaidSlipGaji()
    {
        // Ambil semua ID guru yang sudah terbayar
        $paidGuruIds = SlipGajiGuru::where('status_pembayaran', 'Dibayar')->pluck('guru_id');

        // Ambil data guru yang belum terbayar
        $unpaidGurus = Teacher::whereNotIn('id', $paidGuruIds)->get();

        // Buat array kosong untuk menampung data
        $unpaidGurusData = [];

        // Looping_through data guru yang belum terbayar
        foreach ($unpaidGurus as $guru) {
            // Buat array untuk menampung data guru
            $guruData = [
                'name' => $guru->name,
                'tanggal_pembayaran' => null,  // Tidak ada tanggal pembayaran
                'total_gaji' => 0,  // Tidak ada total gaji
                'status_pembayaran' => 'Belum Terbayar',  // Status pembayaran
            ];

            // Push data guru ke array kosong
            array_push($unpaidGurusData, $guruData);
        }

        // Mengembalikan data dalam format JSON
        return response()->json($unpaidGurusData);
    }

    public function showSalaryList()
    {
        $slipGaji = SlipGajiGuru::with('guru')->get();  // Mengambil semua slip gaji beserta informasi guru
        return view('resource.manajemen-gaji.index', compact('slipGaji'));  // Ganti dengan nama view yang sesuai
    }

    // SISWA
    // Controller

    public function manajemenSiswa()
    {
        try {
            // Ambil siswa beserta kelas dan nilai mereka
            $students = Student::with(['class', 'grades'])->get();

            // Hitung rata-rata nilai untuk setiap siswa
            $ranking = $students->map(function ($student) {
                $averageGrade = $student->grades->avg('grade');
                return [
                    'name' => $student->name,
                    'class' => $student->class->name ?? 'N/A',
                    'average_grade' => $averageGrade,
                ];
            })->sortByDesc('average_grade')->values()->take(5);

            // Ambil data yang diperlukan untuk card statistik
            $jumlahSiswa = Student::count();
            $jumlahGuru = Teacher::count();
            $jumlahKelas = SchoolClass::count();
            // Asumsi Anda memiliki model Faculty atau sejenisnya
            $jumlahFakultas = 3;  // default untuk kasus ini

            // Kelas yang ada untuk ditampilkan
            $schoolClasses = SchoolClass::all();

            // Mengembalikan tampilan dengan data siswa dan ranking
            return view('resource.manajemen-siswa.index', compact('students', 'schoolClasses', 'ranking', 'jumlahSiswa', 'jumlahGuru', 'jumlahKelas', 'jumlahFakultas'));
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function storeSiswa(Request $request)
    {
        try {
            $student = new Student();
            $student->name = $request->input('name');
            $student->dob = $request->input('dob');
            $student->class_id = $request->input('class_id');
            $student->gender = $request->input('gender');
            $student->address = $request->input('address');
            $student->phone = $request->input('phone');
            $student->email = $request->input('email');
            $student->save();
            return response()->json(['message' => 'Data siswa berhasil ditambahkan']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function updateSiswa(Request $request, $id)
    {
        try {
            $student = Student::find($id);
            $student->name = $request->input('name');
            $student->dob = $request->input('dob');
            $student->class_id = $request->input('class_id');
            $student->gender = $request->input('gender');
            $student->address = $request->input('address');
            $student->phone = $request->input('phone');
            $student->email = $request->input('email');
            $student->save();
            return response()->json(data: ['message' => 'Data siswa berhasil diupdate']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function deleteSiswa($id)
    {
        $siswa = Student::find($id);
        if ($siswa) {
            $siswa->delete();
            return response()->json(['message' => 'Siswa berhasil dihapus']);
        } else {
            return response()->json(['error' => 'Siswa tidak ditemukan'], 404);
        }
    }

    public function getSiswaAll()
    {
        return Student::with('class')->get();
    }

    public function getSiswa($id)
    {
        try {
            $student = Student::findOrFail($id);  // Menggunakan findOrFail untuk menangani jika siswa tidak ditemukan
            return response()->json($student);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Siswa tidak ditemukan.'], 404);
        }
    }

    public function manajemenKelas()
    {
        try {
            $data = SchoolClass::all();
            return view('resource.manajemen-kelas.index', compact('data'));
        } catch (\Exception $e) {
            return view('error', ['message' => $e->getMessage()]);
        }
    }

    public function manajemenEkstrakurikuler()
    {
        try {
            $data = Attendance::all();
            return view('resource.manajemen-ekstrakurikuler.index', compact('data'));
        } catch (\Exception $e) {
            return view('error', ['message' => $e->getMessage()]);
        }
    }

    public function manajemenKeuangan()
    {
        try {
            $data = Spp::all();
            return view('resource.manajemen-keuangan.index', compact('data'));
        } catch (\Exception $e) {
            return view('error', ['message' => $e->getMessage()]);
        }
    }

    public function manajemenLaporan()
    {
        try {
            $data = SlipGajiGuru::all();
            return view('resource.manajemen-laporan.index', compact('data'));
        } catch (\Exception $e) {
            return view('error', ['message' => $e->getMessage()]);
        }
    }
}
