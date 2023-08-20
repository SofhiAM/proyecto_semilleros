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
        Schema::create('proyecto', function (Blueprint $table) {
            $table->string('id_proyecto')->id();
            $table->string('titulo_proyecto');
            $table->string('tipo_proyecto');
            $table->string('estado_proyecto');
            $table->date('fecinicio_proyecto');
            $table->date('fecfin_proyecto');
            $table->string('propuesta_proyecto');
            $table->string('informefin_proyecto');
            $table->string('id_semillero');

            $table->primary('id_proyecto');
            $table->foreign('id_semillero')
            ->references('id_semillero')->on('semillero');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyecto');
    }
};
