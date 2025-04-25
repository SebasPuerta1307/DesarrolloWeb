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
        Schema::create('programas', function (Blueprint $table) {
            $table->id('id_programa');
            $table->string('nombre_programa', 100);
            $table->unsignedBigInteger('id_facultad');
            $table->timestamps();
    
            $table->foreign('id_facultad')->references('id_facultad')->on('facultades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programas');
    }
};
