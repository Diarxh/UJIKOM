<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceTable extends Migration
{
    public function up()
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade'); // Foreign key ke siswa
            $table->foreignId('class_id')->constrained('classes')->onDelete('cascade'); // Foreign key ke kelas
            $table->date('date'); // Tanggal absensi
            $table->string('status'); // Status (Hadir, Izin, Sakit, dll.)
            $table->timestamps(); // Tanggal dibuat dan diperbarui
        });
    }

    public function down()
    {
        Schema::dropIfExists('attendance');
    }
}