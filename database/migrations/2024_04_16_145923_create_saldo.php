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
        Schema::create('saldo', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('cuentaId');
            $table->decimal('debe', $precision = 12, $scale = 2)->nullable();
            $table->decimal('haber', $precision = 12, $scale = 2)->nullable();
            $table->dateTime('fecha')->nullable();
            $table->decimal('saldo', $precision = 12, $scale = 2)->nullable();
            $table->decimal('saldoDia', $precision = 12, $scale = 2)->nullable();
            $table->decimal('saldoAnterior', $precision = 12, $scale = 2)->nullable();
            $table->timestamps();
            $table->foreign('cuentaId')->references('id')->on('catalogocuentas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saldo');
    }
};
