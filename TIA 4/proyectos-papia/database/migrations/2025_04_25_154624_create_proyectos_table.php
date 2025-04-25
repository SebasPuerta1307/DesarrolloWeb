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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id('id_proyecto');
        $table->string('titulo', 225);
        $table->text('descripcion')->nullable();
        $table->unsignedBigInteger('id_programa');
        $table->unsignedBigInteger('id_periodo');
        $table->unsignedBigInteger('id_estado');
        $table->unsignedBigInteger('id_tipo_proyecto');
        $table->date('fecha_registro')->default(now());
        $table->timestamps();

        $table->foreign('id_programa')->references('id_programa')->on('programas');
        $table->foreign('id_periodo')->references('id_periodo')->on('periodos');
        $table->foreign('id_estado')->references('id_estado')->on('estados');
        $table->foreign('id_tipo_proyecto')->references('id_tipo_proyecto')->on('tipo_proyecto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
