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
        Schema::create('tbl_reporte', function (Blueprint $table) {
            $table->bigIncrements('id_reporte');
            $table->unsignedBigInteger('fk_usuario');
            $table->foreign('fk_usuario')->references('id_usuario')->on('tbl_usuario');
            $table->string('reporte', 150);
            $table->string('descripcion', 300);
            $table->timestamps();
            $table->index(['id_reporte','fk_usuario']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_reporte');
    }
};
