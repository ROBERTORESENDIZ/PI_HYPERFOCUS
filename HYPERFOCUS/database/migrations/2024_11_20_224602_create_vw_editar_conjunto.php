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
        DB::statement("
            CREATE VIEW vw_editar_conjunto AS
            SELECT
                c.nombre AS nombre_conjunto,
                co.nombre AS nombre_concepto,
                co.definicion AS definicion_concepto
            FROM
                conjuntos c
            INNER JOIN
                conceptos co 
            ON
                co.conjunto_id = c.id
            WHERE 
                c.id =1
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vw_editar_conjunto');
    }
};
