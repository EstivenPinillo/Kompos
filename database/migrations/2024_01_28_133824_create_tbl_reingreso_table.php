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
        Schema::create('tbl_reingreso', function (Blueprint $table) {
            $table->bigIncrement('id_reingreso');
            $table->unsignedBigInteger('fk_ueu');
            $table->foreign('fk_ueu')->references('id_ueu')->on('tbl_usuario_equipo_ubicacion');
            $table->unsignedBigInteger('fk_usuario');
            $table->foreign('fk_usuario')->references('id_usuario')->on('tbl_usuario');
            $table->string('observacion', 300);
            $table->timestamps();
            $table->index(['id_reingreso','fk_ueu','fk_usuario']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_reingreso');
    }
};
