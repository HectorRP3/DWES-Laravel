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
            $table->string('NombreCientifico')->nullable();
            $table->string('Beneficios')->nullable();
            $table->string('NombreComun')->nullable();
            $table->text('Description')->nullable();
            $table->string('Clima')->nullable();
            $table->string('RegionOrigen')->nullable();
            $table->integer('TiempoMaduracion')->nullable();
            $table->string('ImagenUrl')->nullable();
            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('especies', function (Blueprint $table) {
            $table->dropColumn('NombreCientifico');
            $table->dropColumn('NombreCientifico');
            $table->dropColumn('Beneficios');
            $table->dropColumn('NombreComun');
            $table->dropColumn('Description');
            $table->dropColumn('RegionOrigen');
            $table->dropColumn('Clima');
            $table->dropColumn('TiempoMaduracion');
            $table->dropColumn('ImagenUrl');
            $table->dropPrimary('id');
        });
        Schema::dropIfExists('especies');
    }
};
