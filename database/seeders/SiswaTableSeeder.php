<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'nama' => 'Siswa 1',
            'nis' => '12345',
            'kelas' => 'X IPA',
            // Tambahkan atribut lainnya sesuai dengan model Siswa Anda
        ]);
    }
}