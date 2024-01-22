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
        Schema::create('organizacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombreorganizacion'); 
            $table->string('Nit'); 
            $table->string('Direccion'); 
            $table->string('Telefono'); 
            $table->string('Regimen'); 
            $table->string('Resoluciondian'); 
            $table->string('Rangofacturacion'); 
            $table->string('Logo'); 
            $table->string('RepresentanteLegal'); 
            $table->string('NombreUsuario'); 
            $table->string('Tipoorganizacion'); 
            $table->string('emailpaginaweb'); 
            $table->string('slogan'); 
            $table->string('Nombreterminal'); 
            $table->string('conexion'); 
            $table->string('imagen'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizacion');
    }
};
