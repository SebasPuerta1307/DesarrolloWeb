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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id('COD_docente');
        $table->string('nombre_1');
        $table->string('nombre_2')->nullable();
        $table->string('apellido_1');
        $table->string('apellido_2')->nullable();
        $table->string('telefono_1');
        $table->string('telefono_2')->nullable();
        $table->string('correo_electronico');
        $table->string('institucion_docente');
        $table->string('departamento_docente');
        $table->string('facultad_docente');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
