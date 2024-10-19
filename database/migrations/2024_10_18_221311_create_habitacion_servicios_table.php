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
        Schema::create('habitacion_servicios', function (Blueprint $table) {
            $table->id();

            //- habitacion_id servicio_id
            $table->foreignId('habitacion_id')->index();
            $table->foreignId('servicio_id')->index();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitacion_servicios');
    }
};
