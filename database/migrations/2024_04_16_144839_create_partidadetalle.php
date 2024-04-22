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
        Schema::create('partidadetalle', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('encabezadoId');
            $table->foreignId('cuentaId');
            $table->decimal('cargo', $precision = 12, $scale = 2);
            $table->decimal('abono', $precision = 12, $scale = 2);
            $table->foreignId('tipoComprobanteId');
            $table->String('numeroComprobante');
            $table->dateTime('fechaComprobante');
            $table->String('concepto', 255);
            $table->timestamps();
            $table->foreign('encabezadoId')->references('id')->on('partidaencabezado');
            $table->foreign('cuentaId')->references('id')->on('catalogocuentas');
            $table->foreign('tipoComprobanteId')->references('id')->on('tipocomprobante');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidadetalle');
    }
};
