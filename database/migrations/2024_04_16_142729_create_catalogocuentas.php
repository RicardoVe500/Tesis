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
        Schema::create('catalogocuentas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('n1')->nullable()->default(null);
            $table->string('n2')->nullable()->default(null);
            $table->string('n3')->nullable()->default(null);
            $table->string('n4')->nullable()->default(null);
            $table->string('n5')->nullable()->default(null);
            $table->string('n6')->nullable()->default(null);
            $table->string('n7')->nullable()->default(null);
            $table->string('n8')->nullable()->default(null);
            $table->string('noCuenta')->nullable();
            $table->string('CTADependiente')->nullable()->default(null);
            $table->string('nivelCuenta')->nullable();
            $table->String('nombreCuenta')->nullable();
            $table->String('movimientos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogocuentas');
    }
};
