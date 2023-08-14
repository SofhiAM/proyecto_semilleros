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
        Schema::create('coordinador', function (Blueprint $table) {
            $table->string('id_coordinador')->id();
            $table->string('nom_coordinador');
            $table->string('dir_coordinador');
            $table->string('tel_coordinador');
            $table->string('correo_coordinador');
            $table->string('gen_coordinador');
            $table->string('foto_coordinador');
            $table->string('prog_coordinador');
            $table->date('fecnac_coordinador');
            $table->string('areacon_coor');
            $table->date('fechavinc_coor');
            $table->string('acuerdo_coor');
           
            $table->primary('id_coordinador');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coordinador');
    }
};
