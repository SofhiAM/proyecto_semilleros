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
        Schema::create('evento', function (Blueprint $table) {
            $table->string('id_evento')->id();
            $table->string('nom_evento');
            $table->text('descrip_evento');
            $table->date('fecinicio_evento');
            $table->date('fecfin_evento');
            $table->string('lugar_evento');
            $table->string('tipo_evento');
            $table->string('modalidad_evento');
            $table->string('clasific_evento');
            $table->text('observ_evento')->nullable();

            $table->primary('id_evento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento');
    }
};
