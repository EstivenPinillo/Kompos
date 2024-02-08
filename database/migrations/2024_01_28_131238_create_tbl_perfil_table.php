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
        Schema::create('tbl_perfil', function (Blueprint $table) {
            $table->bigIncrements('id_perfil');
            $table->unsignedBigInteger('fk_estado');
            $table->foreign('fk_estado')->references('id_estado')->on('tbl_estado');
            $table->string('perfil', 100);
            $table->string('descripcion', 100);
            $table->string('permisos', 600);
            $table->timestamps();
            $table->index(['id_perfil', 'fk_estado']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_perfil');
    }
};
