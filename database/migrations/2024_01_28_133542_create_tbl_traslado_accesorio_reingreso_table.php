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
        Schema::create('tbl_traslado_accesorio_reingreso', function (Blueprint $table) {
            $table->bigIncrement('id_tar');
            $table->unsignedBigInteger('fk_ueu');
            $table->foreign('fk_ueu')->references('id_ueu')->on('tbl_usuario_equipo_ubicacion');
            $table->unsignedBigInteger('fk_id_accesorio');
            $table->foreign('fk_accesorio')->references('id_accesorio')->on('tbl_accesorio');
            $table->unsignedBigInteger('fk_estado');
            $table->foreign('fk_estado')->references('id_estado')->on('tbl_estado');
            $table->timestamps();
            $table->index(['id_tar','fk_ueu','fk_accesorio','fk_estado']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_traslado_accesorio_reingreso');
    }
};
