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
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->longtext('descripcion');
            $table->datetime('fecha_creacion');
            $table->integer('duracion');
            $table->datetime('fecha_hora_inicio');
            $table->datetime('fecha_hora_fin');
            $table->tinyinteger('completada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividades');
    }
};
