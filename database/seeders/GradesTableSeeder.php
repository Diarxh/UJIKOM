<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Student;  // Pastikan untuk mengimpor model Student
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Ambil semua siswa
        $students = Student::all();

        // Jika ada siswa dalam database
        if ($students->count() > 0) {
            foreach ($students as $student) {
                // Buat beberapa nilai untuk setiap siswa
                for ($i = 0; $i < 5; $i++) {
                    Grade::create([
                        'student_id' => $student->id,
                        'class_id' => $student->class_id,  // Menggunakan class_id dari siswa
                        'subject' => $faker->word,  // Nama mata pelajaran acak
                        'grade' => $faker->numberBetween(60, 100),  // Nilai antara 60 dan 100
                    ]);
                }
            }
        }
    }
}
