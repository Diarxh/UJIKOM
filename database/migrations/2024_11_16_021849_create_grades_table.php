<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade'); // Foreign key ke siswa
            $table->foreignId('class_id')->constrained('classes')->onDelete('cascade'); // Foreign key ke kelas
            $table->string('subject'); // Mata pelajaran
            $table->decimal('grade', 5, 2); // Nilai (misalnya: 80.5)
            $table->timestamps(); // Tanggal dibuat dan diperbarui
        });
    }

    public function down()
    {
        Schema::dropIfExists('grades');
    }
}