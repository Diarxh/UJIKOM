<?php

namespace Database\Seeders;

use App\Models\SPP;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SppTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siswa = Student::first(); // Mengambil siswa pertama yang telah diseed

        SPP::create([
            'siswa_id' => $siswa->id,
            'tahun_ajaran' => '2023/2024',
            'bulan' => 1,
            'jumlah_bayar' => 500000.00,
            'tanggal_bayar' => Carbon::now()->toDateString(),
            'status_bayar' => 'Lunas',
            // 'bukti_bayar' => 'path_to_bukti_bayar.jpg',
        ]);
    }
}
