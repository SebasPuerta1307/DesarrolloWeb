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
        Schema::create('iras', function (Blueprint $table) {
            $table->id('COD_IRA');
        $table->string('descripcion_IRA');
        $table->string('nivel_dominio_IRA');
        $table->unsignedBigInteger('COD_ERA');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iras');
    }
};
