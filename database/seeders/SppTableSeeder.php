<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\SPP;

class SPPSeeder extends Seeder
{
    public function run()
    {
        // Menghapus semua data yang ada
        SPP::truncate();

        // Memasukkan data demo
        $data = [
            [
                'siswa_id' => 1,
                'tahun_ajaran' => '2022/2023',
                'bulan' => 1,
                'jumlah_bayar' => 200000,
                'tanggal_bayar' => '2023-01-15',
                'status_bayar' => 'Lunas',
                'bukti_bayar' => 'bukti_bayar_januari.jpg'
            ],
            [
                'siswa_id' => 1,
                'tahun_ajaran' => '2022/2023',
                'bulan' => 2,
                'jumlah_bayar' => 200000,
                'tanggal_bayar' => '2023-02-15',
                'status_bayar' => 'Lunas',
                'bukti_bayar' => 'bukti_bayar_februari.jpg'
            ],
            // Tambahkan data demo lainnya di sini
        ];

        foreach ($data as $item) {
            SPP::create($item);
        }
    }
}