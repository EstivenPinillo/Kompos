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
        Schema::create('tbl_servicio', function (Blueprint $table) {
            $table->bigIncrements('id_servicio');
            $table->unsignedBigInteger('fk_empresa');
            $table->foreign('fk_empresa')->references('id_empresa')->on('tbl_empresa');
            $table->unsignedBigInteger('fk_usuario');
            $table->foreign('fk_usuario')->references('id_usuario')->on('tbl_usuario');
            $table->unsignedBigInteger('fk_equipo');
            $table->foreign('fk_equipo')->references('id_equipo')->on('tbl_equipo');
            $table->unsignedBigInteger('fk_estado');
            $table->foreign('fk_estado')->references('id_estado')->on('tbl_estado');
            $table->timestamps();
            $table->index(['id_servicio','fk_empresa','fk_equipo','fk_estado']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_servicio');
    }
};
