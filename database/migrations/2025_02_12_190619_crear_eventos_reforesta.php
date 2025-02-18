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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Descripcion');
            $table->string('Ubicacion');
            $table->enum('TipoEvento', ['Reforestacion', 'Charla', 'Taller']);
            $table->enum('TipoTerreno', ['Urbano', 'Rural', 'Montaña', 'Playa']);
            $table->date('Fecha');
            $table->string('ImagenUrl');
            $table->timestamps();
            $table->primary(['id']);
            $table->foreignId('anfitrion_id')->nullable()->constrained('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
