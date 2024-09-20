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
        Schema::create('autoridades_comisiones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('autoridades_id');
            $table->unsignedBigInteger('comisiones_id');
            $table->unsignedBigInteger('cargos_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autoridades_comisiones');
    }
};
