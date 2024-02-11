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
        Schema::create('tbl_usuario', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->unsignedBigInteger('fk_perfil');
            $table->foreign('fk_perfil')->references('id_perfil')->on('tbl_perfil');
            $table->unsignedBigInteger('fk_tipo_dcmnt');
            $table->foreign('fk_tipo_dcmnt')->references('id_tipo_dcmnt')->on('tbl_tipo_documento');
            $table->unsignedBigInteger('fk_estado');
            $table->foreign('fk_estado')->references('id_estado')->on('tbl_estado');
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('documento',100);
            $table->string('correo',300);
            $table->timestamps();
            $table->index(['id_usuario','fk_perfil','fk_tipo_dcmnt','fk_estado']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_usuario');
    }
};
