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
        // Data siswa dan guru (contoh)
        $students = Student::pluck('id')->toArray();
        $teachers = Teacher::pluck('id')->toArray();
        $statuses = ['present', 'absent', 'late'];

        $classIds = DB::table('classes')->pluck('id')->toArray();  // Ambil class_id dari tabel classes

        // Insert data absensi untuk siswa
        foreach ($students as $studentId) {
            Attendance::create([
                'student_id' => $studentId,
                'class_id' => $classIds[array_rand($classIds)],  // Gunakan class_id yang valid
                'date' => Carbon::now()->subDays(rand(0, 7)),
                'status' => $statuses[array_rand($statuses)],
            ]);
        }

        foreach ($teachers as $teacherId) {
            Attendance::create([
                'teacher_id' => $teacherId,
                'class_id' => $classIds[array_rand($classIds)],  // Gunakan class_id yang valid
                'date' => Carbon::now()->subDays(rand(0, 7)),
                'status' => $statuses[array_rand($statuses)],
            ]);
        }
    }
}
