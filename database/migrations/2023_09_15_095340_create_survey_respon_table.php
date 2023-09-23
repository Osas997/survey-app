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
        Schema::create('survey_respon', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_survey');
            $table->foreign('id_survey')->references('id')->on('survey');
            $table->unsignedBigInteger('id_user');
            $table->string('skor', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_respon');
    }
};
