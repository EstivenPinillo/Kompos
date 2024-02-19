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
        Schema::create('tbl_ubicacion', function (Blueprint $table) {
            $table->bigIncrements('id_ubicacion');
            $table->unsignedBigInteger('fk_area');
            $table->foreign('fk_area')->references('id_area')->on('tbl_area');
            $table->unsignedBigInteger('fk_usuario');
            $table->foreign('fk_usuario')->references('id_usuario')->on('tbl_usuario');
            $table->unsignedBigInteger('fk_estado');
            $table->foreign('fk_estado')->references('id_estado')->on('tbl_estado');
            $table->string('posicion', 100);
            $table->string('cardinalidad', 100);
            $table->string('observacion', 300);
            $table->timestamps();
            $table->index(['id_ubicacion','fk_area','fk_usuario','fk_estado']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_ubicacion');
    }
};
