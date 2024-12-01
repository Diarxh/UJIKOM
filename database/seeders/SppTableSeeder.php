<?php

namespace Database\Seeders;

use App\Models\SPP;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SppTableSeeder extends Seeder
{
    // public function run()
    // {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh data yang akan dimasukkan ke dalam tabel spp
        $data = [
            [
                'siswa_id' => 5,
                'tahun_ajaran' => '2023/2024',
                'bulan' => 1,
                'jumlah_bayar' => 500000,
                'tanggal_bayar' => Carbon::now()->toDateString(),
                'status_bayar' => 'Lunas',
                'bukti_bayar' => 'bukti1.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'siswa_id' => 6,
                'tahun_ajaran' => '2023/2024',
                'bulan' => 2,
                'jumlah_bayar' => 500000,
                'tanggal_bayar' => Carbon::now()->toDateString(),
                'status_bayar' => 'Belum Lunas',
                'bukti_bayar' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Tambahkan lebih banyak data sesuai kebutuhan
        ];

        // Masukkan data ke dalam tabel spp
        DB::table('spp')->insert($data);

        // foreach ($data as $item) {
        //     SPP::create($item);
        // }
    }
}
