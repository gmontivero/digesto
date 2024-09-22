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
        Schema::create('autoridades_bloques', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('autoridad_id');
            $table->unsignedBigInteger('bloque_id');
            $table->unsignedBigInteger('cargo_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autoridades_bloques');
    }
};
