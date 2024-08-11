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
        Schema::create('digestos', function (Blueprint $table) {
            $table->id();
            $table->string('numero',30);
            $table->string('titulo',100);
            $table->text('resumen')->max(400);
            $table->date('fecha');
            $table->string('pdf');
            $table->unsignedInteger('tipo_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('digestos');
    }
};
