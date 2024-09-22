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
        Schema::create('autoridades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->unsignedBigInteger('cargo_id');
            $table->string('info',150)->nullable();
            $table->string('imagen')->nullable();
            $table->text('twitter')->nullable();
            $table->text('email')->nullable();
            $table->text('instagram')->nullable();
            $table->text('facebook')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autoridades');
    }
};
