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
        Schema::create('encargadoSucursal', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('usuarioId');
            $table->timestamps();
            $table->foreign('usuarioId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
