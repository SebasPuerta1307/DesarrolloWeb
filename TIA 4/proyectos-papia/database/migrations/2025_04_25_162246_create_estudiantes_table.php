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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id('id_estudiante');
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('documento', 20);
            $table->string('correo', 100);
            $table->unsignedBigInteger('id_programa');
            $table->boolean('matricula_activa');
            $table->timestamps();
    
            $table->foreign('id_programa')->references('id_programa')->on('programas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
