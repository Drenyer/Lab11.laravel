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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('numeroVuelo');
            $table->dateTime('fechaSalida');
            $table->dateTime('fechaLlegada');
            $table->integer('duracion');
            $table->integer('idAvion');
            $table->integer('idRuta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
