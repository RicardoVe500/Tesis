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
        Schema::create('sucursal', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('empresaId');
            $table->string('encargadoId');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('correo');
            $table->string('telefono');
            $table->timestamps();
            $table->foreign('empresaId')->references('id')->on('empresa');
            $table->foreign('encargadoId')->references('id')->on('encargadoSucursal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sucursal');
    }
};
