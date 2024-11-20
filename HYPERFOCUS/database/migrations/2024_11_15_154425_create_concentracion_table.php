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
        Schema::create('concentracion', function (Blueprint $table) {
            $table->id();
            $table->datetime('fecha_hora_realizacion');
            $table->integer('tiempo_destinado');
            $table->integer('cant_intervalos_concentracion');
            $table->integer('tiempo_intervalos_concentracion');
            $table->integer('cant_intervalos_descanso');
            $table->integer('tiempo_intervalos_descanso');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concentracion');
    }
};
