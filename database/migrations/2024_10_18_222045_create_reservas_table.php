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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();

            //- fecha usuario habitacion estado (cancelada, a  ctiva, denegada) fecha de inicio fecha de fin observaciones
            $table->date('fecha')->nullable();
            $table->string('usuario')->index();
            $table->foreignId('habitacion')->index();
            $table->string('estado')->default('pendiente');
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->string('observaciones')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
