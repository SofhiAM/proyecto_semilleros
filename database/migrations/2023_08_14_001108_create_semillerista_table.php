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
        Schema::create('semillerista', function (Blueprint $table) {
            $table->string('cod_semillerista')->id();;
            $table->string('id_semillerista')->unique();
            $table->string('nom_semillerista');
            $table->string('dir_semillerista');
            $table->string('tel_semillerista');
            $table->string('correo_semillerista');
            $table->string('gen_semillerista');
            $table->string('semestre_semillerista');
            $table->string('foto_semillerista');
            $table->string('reportemat_semillerista');
            $table->string('prog_semillerista');
            $table->date('fecnac_semillerista');
            $table->date('fecvinc_semillerista');
            $table->string('estado_semillerista');
            $table->string('id_semillero');

            $table->primary('id_semillerista');
            $table->foreign('id_semillero')
            ->references('id_semillero')->on('semillero');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semillerista');
    }
};
