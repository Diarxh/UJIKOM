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
        Schema::table('teachers', function (Blueprint $table) {
            $table->decimal('gaji_pokok', 15, 2)->nullable();
            $table->decimal('tunjangan', 15, 2)->nullable();
            $table->decimal('potongan', 15, 2)->nullable();
            $table->decimal('total_gaji', 15, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropColumn('gaji_pokok');
            $table->dropColumn('tunjangan');
            $table->dropColumn('potongan');
            $table->dropColumn('total_gaji');
        });
    }
};