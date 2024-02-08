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
        Schema::create('tbl_tipo_documento', function (Blueprint $table) {
            $table->bigIncrements('id_tipo_dcmnt');
            $table->string('tipo', 100);
            $table->string('descripcion', 100);
            $table->timestamps();
            $table->index(['id_tipo_documento']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_tipo_documento');
    }
};
