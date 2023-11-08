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
        Schema::table('survey_respon', function (Blueprint $table) {
            $table->unsignedBigInteger('id_murid')->after('id_survey');
            $table->unsignedBigInteger('id_sekolah')->after('id_murid');
            $table->foreign('id_murid')->references('id')->on('murid');
            $table->foreign('id_sekolah')->references('id')->on('sekolah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('survey_respon', function (Blueprint $table) {
            //
        });
    }
};
