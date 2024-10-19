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
        Schema::create('alquilers', function (Blueprint $table) {
            //*- Usuario Habitacion fecha Inicio Fecha Fin Costo base (pagar) Costo diferido (otros) estado

            $table->id();   
            $table->string ('usuario')->index();
            $table->foreignId('habitacion')->index();
            $table->date('fecha_inicio')->nullbable();
            $table->date('fecha_fin')->nullbable();
            $table->string('costo_base') ->nullable();
            $table->string('costo_diferido')->nullable();
            $table->string('estado')->default('pendiente');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alquilers');
    }
};
