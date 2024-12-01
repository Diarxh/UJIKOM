<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('attendance', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id')->nullable()->change();  // Ubah menjadi nullable
            $table->unsignedBigInteger('teacher_id')->nullable()->change();  // Pastikan juga teacher_id nullable
        });
    }

    public function down()
    {
        Schema::table('attendance', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id')->nullable(false)->change();  // Kembalikan ke tidak nullable
            $table->unsignedBigInteger('teacher_id')->nullable(false)->change();
        });
    }
};
