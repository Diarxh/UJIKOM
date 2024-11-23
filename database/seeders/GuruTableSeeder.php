<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'name' => 'Guru 1',
            'subject' => 'Matematika',
            'hire_date' => '2020-01-01',
            'phone' => '081234567890',
            'email' => 'guru1@example.com',
            'gaji_pokok' => 5000000.00, // Gaji pokok
            'tunjangan' => 500000.00, // Tunjangan
            'potongan' => 100000.00, // Potongan
            'total_gaji' => 5600000.00 // Total gaji
        ]);

        Teacher::create([
            'name' => 'Guru 2',
            'subject' => 'Fisika',
            'hire_date' => '2021-01-01',
            'phone' => '081234567891',
            'email' => 'guru2@example.com',
            'gaji_pokok' => 6000000.00, // Gaji pokok
            'tunjangan' => 600000.00, // Tunjangan
            'potongan' => 100000.00, // Potongan
            'total_gaji' => 6600000.00 // Total gaji
        ]);
    }
}