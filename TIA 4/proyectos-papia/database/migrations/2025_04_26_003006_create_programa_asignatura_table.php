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
        Schema::create('programa_asignatura', function (Blueprint $table) {
            $table->unsignedBigInteger('COD_programa');
        $table->unsignedBigInteger('COD_asignatura');
        $table->primary(['COD_programa', 'COD_asignatura']);

        $table->foreign('COD_programa')->references('COD_programa')->on('programa_academicos')->onDelete('cascade');
        $table->foreign('COD_asignatura')->references('COD_asignatura')->on('asignaturas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programa_asignatura');
    }
};
