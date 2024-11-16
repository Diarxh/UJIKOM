<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama kelas (misalnya: 10A, 10B)
            $table->foreignId('teacher_id')->nullable()->constrained('teachers')->onDelete('set null'); // Foreign key ke guru
            $table->timestamps(); // Tanggal dibuat dan diperbarui
        });
    }

    public function down()
    {
        Schema::dropIfExists('classes');
    }
}