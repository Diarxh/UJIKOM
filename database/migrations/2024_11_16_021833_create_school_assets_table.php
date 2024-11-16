<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolAssetsTable extends Migration
{
    public function up()
    {
        Schema::create('school_assets', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // Jenis aset (background, logo, dll.)
            $table->string('path'); // Path file gambar
            $table->timestamps(); // Tanggal dibuat dan diperbarui
        });
    }

    public function down()
    {
        Schema::dropIfExists('school_assets');
    }
}