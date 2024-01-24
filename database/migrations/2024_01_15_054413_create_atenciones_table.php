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
        Schema::create('atenciones', function (Blueprint $table) {
            $table->id();
            // informacion personal
            $table->string('tipodocumento');
            $table->string('numerodocumento');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('identidadgenero');
            $table->string('email');
            $table->string('telefono');
            $table->string('celular');
            // informacion del servicio solicitado 
            $table->string('tipoatencion');
            $table->string('encalidad');
            $table->string('numerodocumentorp')->nullable();
            $table->string('nombresrp')->nullable();
            $table->string('apellidosrp')->nullable();
            $table->string('telefonorp')->nullable();
            $table->string('celularrp')->nullable();
            $table->string('emailrp')->nullable();
            $table->string('copiacedularp')->nullable();
            //tutela
            $table->string('nombreentidad')->nullable();
            $table->string('ciudaddireccion')->nullable();
            $table->string('telefonoentidad')->nullable();
            $table->string('emailentidad')->nullable();
            $table->string('copiadocumentoafectado')->nullable();
            $table->string('tutelaanterior')->nullable();
            $table->string('copiatutelaanterior')->nullable();
            $table->string('resumenhechos')->nullable();
            $table->string('evidenciashechos')->nullable();

            //impugnacion tutela
            $table->string('copiafallotutela')->nullable();

            //derecho de peticion
            $table->string('nombreentidadpeticion')->nullable();
            $table->string('cargoentidadpeticion')->nullable();
            $table->string('ciudaddireccionpeticion')->nullable();
            $table->string('telefonoentidadpeticion')->nullable();
            $table->string('emailentidadpeticion')->nullable();
            $table->string('autorizaenvioemailpeticion')->nullable();
            $table->string('peticiones')->nullable();
            
            //asesoria juridica
            //documento del afectado, evidencias de los hechos, hechos

            //incidente de desacato
            $table->string('numeroradicadofallotutela')->nullable();
            $table->string('nombresjusgadofallo')->nullable();
            // $table->string('copiafallotutela')->nullable();

            //solicitud amparo de pobreza
            //documento del afectado, evidencias de los hechos, hechos

            // reclamacion de derechos del consumidor
            //documento del afectado, evidencias de los hechos, hechos

            //recurso de reposicion y apelacion a victimas del conflicto armado
            //evidencias de los hechos, hechos
            $table->string('copiaresolucionnegacion')->nullable();
            $table->string('observacionesatenciongeneral');
            $table->string('nombresabogadoasignado');
            $table->string('estado');
            // $table->unsignedBigInteger('persona_id');
            // $table->foreign('persona_id')->references('id')->on('personas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atenciones');
    }
};
