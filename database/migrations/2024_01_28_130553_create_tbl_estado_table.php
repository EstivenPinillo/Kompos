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
        Schema::create('tbl_estado', function (Blueprint $table) {
            $table->bigIncrements('id_estado');
            $table->string('nombre', 100);
            $table->string('descripcion', 150);
            $table->timestamps();
            $table->index(['id_estado']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_estado');
    }
};
