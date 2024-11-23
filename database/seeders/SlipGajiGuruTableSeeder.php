<?php

namespace Database\Seeders;

use App\Models\SlipGajiGuru;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SlipGajiGuruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guru = Teacher::first(); // Mengambil guru pertama yang telah diseed

        SlipGajiGuru::create([
            'guru_id' => $guru->id,
            'bulan' => 1,
            'tahun' => 2023,
            'gaji_pokok' => $guru->gaji_pokok,
            'tunjangan' => 500000.00,
            'potongan' => 100000.00,
            'total_gaji' => ($guru->gaji_pokok + 500000.00 - 100000.00),
            'tanggal_pembayaran' => Carbon::now()->toDateString(),
            'status_pembayaran' => 'Dibayar',
        ]);
    }
}