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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
// informacion personal
            $table->string('tipodocumento');
            $table->string('numerodocumento');
            $table->string('name');
            $table->string('apellidos');
            $table->string('identidadgenero');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('celular');
// informacion de nacimiento
            $table->integer('dianacimiento');
            $table->integer('mesnacimiento');
            $table->integer('anonacimiento');
            $table->integer('edad');
            $table->string('paisnacimiento');
            $table->string('departamentonacimiento');
            $table->string('municipionacimiento');
// informacion de ubicacion 
            $table->string('paisresidencia');
            $table->string('departamentoresidencia');
            $table->string('municipioresidencia');
            $table->string('comunaresidencia');
            $table->string('barrioresidencia');
            $table->string('direccionresidencia');
// caracterizacion
            $table->string('nivelacademico');
            $table->string('profesion');
            $table->string('grupopoblacional');
            $table->string('etnia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
