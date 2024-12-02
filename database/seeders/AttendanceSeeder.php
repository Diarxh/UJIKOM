<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data siswa dan guru dari database
        $students = Student::pluck('id')->toArray();
        $teachers = Teacher::pluck('id')->toArray();
        $statuses = ['present', 'absent', 'late'];

        // Ambil data kelas
        $classIds = DB::table('classes')->pluck('id')->toArray(); // Pastikan tabel 'school_classes' benar

        // Jika tidak ada data kelas, siswa, atau guru, hentikan proses
        if (empty($classIds)) {
            $this->command->error('Data kelas kosong. Pastikan tabel school_classes memiliki data.');
            return;
        }
        if (empty($students)) {
            $this->command->error('Data siswa kosong. Pastikan tabel students memiliki data.');
            return;
        }
        if (empty($teachers)) {
            $this->command->error('Data guru kosong. Pastikan tabel teachers memiliki data.');
            return;
        }

        // Seeder untuk absensi siswa
        foreach ($students as $studentId) {
            Attendance::create([
                'student_id' => $studentId,
                'teacher_id' => null,
                'class_id' => $classIds[array_rand($classIds)], // Pilih class_id secara acak
                'date' => Carbon::now()->subDays(rand(0, 7))->format('Y-m-d'), // Random 7 hari terakhir
                'status' => $statuses[array_rand($statuses)], // Status random
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Seeder untuk absensi guru
        foreach ($teachers as $teacherId) {
            Attendance::create([
                'student_id' => null,
                'teacher_id' => $teacherId,
                'class_id' => $classIds[array_rand($classIds)], // Pilih class_id secara acak
                'date' => Carbon::now()->subDays(rand(0, 7))->format('Y-m-d'), // Random 7 hari terakhir
                'status' => $statuses[array_rand($statuses)], // Status random
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $this->command->info('Seeder absensi berhasil dijalankan!');
    }
}