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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('Nick')->unique();
            $table->string('Nombre');
            $table->string('Apellidos');
            $table->string('Email')->unique();
            $table->string('Password');
            $table->integer('Karma');
            $table->boolean('suscrito');
            $table->timestamps();
            $table->primary(['id']);
        });

        Schema::create('especies', function (Blueprint $table) {
            $table->id();
            $table->string('NombreCientifico')->unique();
            $table->string('NombreComun');
            $table->string('Clima');
            $table->string('RegionOrigen');
            $table->integer('Crecimineto');
            $table->string('ImagenUrl');
            $table->string('Enlace');
            $table->timestamps();
            $table->primary(['id']);
        });

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

        Schema::create('eventos_especies', function (Blueprint $table) {
            $table->foreignId('eventos_id')->constrained('eventos')->onDelete('cascade');
            $table->foreignId('especies_id')->constrained('especies')->onDelete('cascade');
            $table->integer('Cantidad');
            $table->timestamps();
            $table->primary(['eventos_id', 'especies_id']);
        });
        Schema::create('participantes', function (Blueprint $table) {
            $table->foreignId('eventos_id')->constrained('eventos')->onDelete('cascade');
            $table->foreignId('usuarios_id')->constrained('usuarios')->onDelete('cascade');
            $table->timestamps();
            $table->primary(['eventos_id', 'usuarios_id']);
        });
        Schema::create('beneficios', function (Blueprint $table) {
            $table->id();
            $table->string('Descripcion');
            $table->timestamps();
        });

        Schema::create('beneficios_especies', function (Blueprint $table) {
            $table->foreignId('beneficio_id')->constrained('beneficios')->onDelete('cascade');
            $table->foreignId('especies_id')->constrained('especies')->onDelete('cascade');
            $table->primary(['beneficio_id', 'especies_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('beneficios_especies', function (Blueprint $table) {
            $table->dropForeign(['beneficio_id']);
            $table->dropForeign(['especies_id']);
            $table->dropPrimary(['beneficio_id', 'especies_id']);
        });
        Schema::dropIfExists('beneficios_especies');
        Schema::dropIfExists('beneficios');
        Schema::dropIfExists('participantes');
        Schema::dropIfExists('eventos_especies');
        Schema::dropIfExists('usuarios');
        Schema::dropIfExists('especies');
        Schema::dropIfExists('eventos');
    }
};
