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
        Schema::create('proyectoevento', function (Blueprint $table) {
            $table->string('id_proyecto');
            $table->string('id_evento');

            $table->primary(['id_proyecto', 'id_evento']);
            
            $table->foreign('id_evento')
            ->references('id_evento')->on('evento');

            $table->foreign('id_proyecto')
            ->references('id_proyecto')->on('proyecto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectoevento');
    }
};
