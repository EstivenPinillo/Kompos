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
        Schema::create('tbl_usuario_equipo_ubicacion', function (Blueprint $table) {
            $table->bigIncrements('id_ueu');
            $table->unsignedBigInteger('fk_usuario');
            $table->foreign('fk_usuario')->references('id_usuario')->on('tbl_usuario');
            $table->unsignedBigInteger('fk_equipo');
            $table->foreign('fk_equipo')->references('id_equipo')->on('tbl_equipo');
            $table->unsignedBigInteger('fk_ubicacion');
            $table->foreign('fk_ubicacion')->references('id_ubicacion')->on('tbl_ubicacion');
            $table->unsignedBigInteger('fk_estado');
            $table->foreign('fk_estado')->references('id_estado')->on('tbl_estado');
            $table->timestamps();
            $table->index(['id_ueu','fk_usuario','fk_equipo','fk_ubicacion','fk_estado']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_usuario_equipo_ubicacion');
    }
};
