<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // // Tabel roles
        // Schema::create('roles', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name')->unique();
        //     $table->timestamps();
        // });

        // // Tabel permissions
        // Schema::create('permissions', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name')->unique();
        //     $table->timestamps();
        // });

        // // Tabel role_user untuk relasi many-to-many antara user dan role
        // Schema::create('role_user', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('user_id');
        //     $table->unsignedBigInteger('role_id');
        //     $table->timestamps();

        //     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        //     $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        // });

        // // Tabel permission_role untuk relasi many-to-many antara role dan permission
        // Schema::create('permission_role', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('permission_id');
        //     $table->unsignedBigInteger('role_id');
        //     $table->timestamps();

        //     $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
        //     $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_role');
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('roles');
    }
};
