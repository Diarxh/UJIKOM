<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('spp', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id');
            $table->string('tahun_ajaran', 10); // Contoh: 2023/2024
            $table->unsignedTinyInteger('bulan'); // Bulan (1-12)
            $table->decimal('jumlah_bayar', 15, 2); // Jumlah bayar, 15 digit, 2 desimal
            $table->date('tanggal_bayar');
            $table->enum('status_bayar', ['Lunas', 'Belum Lunas', 'Terlambat']);
            $table->string('bukti_bayar', 255)->nullable(); // Path ke file bukti bayar
            $table->timestamps();

            $table->foreign('siswa_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spp');
    }
};