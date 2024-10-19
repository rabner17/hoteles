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
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();

            // - id_alquiler id_usuario fecha estado (se hizo, no se hizo, observaciones) observaciones tipo (in / out)
            $table->foreignId('id_alquiler')->index();
            $table->foreignId('id_usuario')->index();
            $table->date('fecha')->nullable();
            $table->string('estado')->default('pendiente');
            $table->string('observaciones')->nullable();
            $table->string('tipo')->default('in');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};
