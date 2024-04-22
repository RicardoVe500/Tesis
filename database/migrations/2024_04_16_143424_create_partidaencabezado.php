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
        Schema::create('partidaencabezado', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('tipoPartidaId');
            $table->String('codigoPartida');
            $table->dateTime('fechaContable');
            $table->dateTime('fechaActual');
            $table->decimal('debe', $precision = 12, $scale = 2);
            $table->decimal('haber', $precision = 12, $scale = 2);
            $table->decimal('diferenca', $precision = 12, $scale = 2);
            $table->String('conceptoGeneral');
            $table->String('estado');
            $table->timestamps();
            $table->foreign('tipoPartidaId')->references('id')->on('tipopartida');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidaencabezado');
    }
};
