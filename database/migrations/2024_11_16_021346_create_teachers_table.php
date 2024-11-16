<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subject'); // Mata pelajaran
            $table->date('hire_date'); // Tanggal dipekerjakan
            $table->string('phone')->nullable(); // Nomor telepon
            $table->string('email')->nullable(); // Email
            $table->timestamps(); // Tanggal dibuat dan diperbarui
        });
    }

    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}