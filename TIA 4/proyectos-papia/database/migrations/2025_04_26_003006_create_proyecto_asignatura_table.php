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
        Schema::create('proyecto_asignatura', function (Blueprint $table) {
            $table->unsignedBigInteger('COD_proyecto');
        $table->unsignedBigInteger('COD_asignatura');
        $table->primary(['COD_proyecto', 'COD_asignatura']);

        $table->foreign('COD_proyecto')->references('COD_proyecto')->on('proyectos')->onDelete('cascade');
        $table->foreign('COD_asignatura')->references('COD_asignatura')->on('asignaturas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyecto_asignatura');
    }
};
