<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dob'); // Tanggal Lahir
            $table->foreignId('class_id')->constrained('classes')->onDelete('cascade'); // Foreign key ke kelas
            $table->string('gender'); // Jenis kelamin (L/P)
            $table->string('address')->nullable(); // Alamat
            $table->string('phone')->nullable(); // Nomor telepon
            $table->string('email')->nullable(); // Email
            $table->timestamps(); // Tanggal dibuat dan diperbarui
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}