<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('npsn(username)', 20);
            $table->string('password', 255);
            $table->string('nama_sekolah', 50);
            $table->string('alamat_sekolah', 75);
            $table->string('kabupaten', 25)->nullable();
            $table->enum('status')->comment('negeri atau swasta');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah');
    }
};
