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
        Schema::create('tbl_accesorio', function (Blueprint $table) {
            $table->bigIncrements('id_accesorio');
            $table->unsignedBigInteger('fk_equipo');
            $table->foreign('fk_equipo')->references('id_equipo')->on('tbl_equipo');
            $table->unsignedBigInteger('fk_estado');
            $table->foreign('fk_estado')->references('id_estado')->on('tbl_estado');
            $table->string('serial_proveedor', 150);
            $table->string('nombre', 100);
            $table->string('marca', 100);
            $table->string('modelo', 150);
            $table->string('observacion', 300);
            $table->timestamps();
            $table->index(['id_accesorio','fk_equipo','fk_estado']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_accesorio');
    }
};
