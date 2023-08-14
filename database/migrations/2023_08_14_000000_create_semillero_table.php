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
        Schema::create('semillero', function (Blueprint $table) {
            $table->string('id_semillero')->id();
            $table->string('nom_semillero');
            $table->string('correo_semillero');
            $table->string('logo_semillero');
            $table->text('descrip_semillero');
            $table->text('mision');
            $table->text('vision');
            $table->text('valores');
            $table->text('objetivos');
            $table->text('linea_invest');
            $table->string('presentacion');
            $table->date('fecha_creacion_sem');
            $table->integer('numres_semillero');
            $table->string('resolucion_semillero');
            $table->string('id_coordinador');
            
            $table->primary('id_semillero');
            $table->foreign('id_coordinador')
            ->references('id_coordinador')->on('coordinador');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semillero');
    }
};
