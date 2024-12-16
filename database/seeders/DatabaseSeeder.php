<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\AttendanceSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(GuruTableSeeder::class);

        $this->call(SlipGajiGuruTableSeeder::class);
        $this->call(SppTableSeeder::class);
        $this->call(AttendanceSeeder::class);
        // Memanggil seeder lain jika ada
        $this->call([
            GradesTableSeeder::class,
            // Panggil seeder lain di sini jika diperlukan
        ]);
    }
}
