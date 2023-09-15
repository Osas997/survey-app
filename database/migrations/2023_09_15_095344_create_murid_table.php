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

        Schema::create('murid', function (Blueprint $table) {
            $table->id()->foreign('survey');
            $table->string('nisn', 20);
            $table->string('password', 255);
            $table->string('nama_murid', 50);
            $table->enum('jenis_kelamin')->comment('laki dan perempuan');
            $table->unsignedBigInteger('id_sekolah')->index();
            $table->foreign('id_sekolah')->references('id')->on('sekolah');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('murid');
    }
};
