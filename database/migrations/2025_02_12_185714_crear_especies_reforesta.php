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
        Schema::create('especies', function (Blueprint $table) {
            $table->id();
            $table->string('nombreCientifico')->unique();
            $table->string('nombreComun');
            $table->string('clima');
            $table->string('regionOrigen');
            $table->integer('crecimiento');
            $table->string('imagenUrl');
            $table->string('enlace');
            $table->timestamps();
            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especies');
    }
};
