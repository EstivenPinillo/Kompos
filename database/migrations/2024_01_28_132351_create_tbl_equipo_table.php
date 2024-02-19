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
        Schema::create('tbl_equipo', function (Blueprint $table) {
            $table->bigIncrements('id_equipo');
            $table->unsignedBigInteger('fk_proveedor');
            $table->foreign('fk_proveedor')->references('id_empresa')->on('tbl_empresa');
            $table->unsignedBigInteger('fk_estado');
            $table->foreign('fk_estado')->references('id_estado')->on('tbl_estado');
            $table->string('serial_proveedor', 150);
            $table->string('marca', 100);
            $table->string('serial_frabrica', 150);
            $table->string('placa_madre', 150);
            $table->string('procesador', 150);
            $table->string('memoria_ram', 150);
            $table->string('almacenamiento', 100);
            $table->string('tarjeta_grafica', 150);
            $table->string('observacion', 300);
            $table->timestamps();
            $table->index(['id_equipo', 'fk_proveedor', 'fk_estado']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_equipo');
    }
};
