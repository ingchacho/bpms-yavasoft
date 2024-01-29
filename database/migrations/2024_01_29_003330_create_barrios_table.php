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
        Schema::create('barrios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comuna_id');
            $table->string('nombrebarrio');
            $table->string('nombrecomuna');
            $table->string('nombrezona');
            $table->string('nombreciudad');
            $table->integer('estado');
            $table->foreign('comuna_id')->references('id')->on('comunas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barrios');
    }
};
