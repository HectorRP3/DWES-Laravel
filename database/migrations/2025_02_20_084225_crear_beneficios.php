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
        //
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
        //
        Schema::table('beneficios_especies', function (Blueprint $table) {
            $table->dropForeign(['beneficio_id']);
            $table->dropForeign(['especies_id']);
            $table->dropPrimary(['beneficio_id', 'especies_id']);
        });
        Schema::dropIfExists('beneficios_especies');
        Schema::dropIfExists('beneficios');
    }
};
