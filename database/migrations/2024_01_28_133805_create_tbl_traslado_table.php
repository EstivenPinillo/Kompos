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
        Schema::create('tbl_traslado', function (Blueprint $table) {
            $table->bigIncrements('id_traslado');
            $table->unsignedBigInteger('fk_traslado');
            $table->foreign('fk_traslado')->references('id_traslado')->on('tbl_traslado');
            $table->unsignedBigInteger('fk_estado');
            $table->foreign('fk_estado')->references('id_estado')->on('tbl_estado');
            $table->unsignedBigInteger('fk_usuario');
            $table->foreign('fk_usuario')->references('id_usuario')->on('tbl_usuario');
            $table->string('acceso_remoto', 300);
            $table->timestamps();
            $table->index(['id_traslado','fk_traslado','fk_estado','fk_usuario']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_traslado');
    }
};
