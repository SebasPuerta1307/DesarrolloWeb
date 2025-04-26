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
        Schema::create('proyecto_era', function (Blueprint $table) {
            $table->unsignedBigInteger('COD_proyecto');
        $table->unsignedBigInteger('COD_ERA');
        $table->primary(['COD_proyecto', 'COD_ERA']);

        $table->foreign('COD_proyecto')->references('COD_proyecto')->on('proyectos')->onDelete('cascade');
        $table->foreign('COD_ERA')->references('COD_ERA')->on('eras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyecto_era');
    }
};
