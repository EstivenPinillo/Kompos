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
        Schema::create('tbl_area', function (Blueprint $table) {
            $table->bigIncrements('id_area');
            $table->unsignedBigInteger('fk_mapa');
            $table->foreign('fk_mapa')->references('id_mapa')->on('tbl_mapa');
            $table->unsignedBigInteger('fk_usuario');
            $table->foreign('fk_usuario')->references('id_usuario')->on('tbl_usuario');
            $table->unsignedBigInteger('fk_estado');
            $table->foreign('fk_estado')->references('id_estado')->on('tbl_estado');
            $table->string('nombre', 100);
            $table->string('descripcion', 100);
            $table->timestamps();
            $table->index(['id_area','fk_mapa','fk_usuario','fk_estado']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_area');
    }
};
