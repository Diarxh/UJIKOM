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
        Schema::create('slip_gaji_guru', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guru_id');
            $table->unsignedSmallInteger('bulan'); // Bulan (1-12)
            $table->unsignedSmallInteger('tahun'); // Tahun (empat digit)
            $table->decimal('gaji_pokok', 15, 2); // Gaji pokok, 15 digit, 2 desimal
            $table->decimal('tunjangan', 15, 2); // Tunjangan, 15 digit, 2 desimal
            $table->decimal('potongan', 15, 2); // Potongan, 15 digit, 2 desimal
            $table->decimal('total_gaji', 15, 2); // Total gaji, 15 digit, 2 desimal
            $table->date('tanggal_pembayaran');
            $table->enum('status_pembayaran', ['Dibayar', 'Belum Dibayar']);
            $table->timestamps();

            $table->foreign('guru_id')->references('id')->on('teachers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slip_gaji_guru');
    }
};