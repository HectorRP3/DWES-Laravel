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
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('ubicacion');
            $table->enum('tipoEvento', ['Reforestacion', 'Charla', 'Taller']);
            $table->enum('tipoTerreno', ['Urbano', 'Rural', 'Montaña', 'Playa']);
            $table->date('fecha');
            $table->string('imagenUrl');
            $table->string('documentoUrl');
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
