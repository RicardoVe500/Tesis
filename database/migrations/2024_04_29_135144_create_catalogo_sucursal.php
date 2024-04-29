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
        Schema::create('catalogo_sucursal', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('sucursalId');
            $table->string('cuentaId');
            $table->timestamps();
            $table->foreign('sucursalId')->references('id')->on('sucursal');
            $table->foreign('cuentaId')->references('id')->on('catalogocuentas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogo_sucursal');
    }
};
