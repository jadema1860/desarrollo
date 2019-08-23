<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('documento');
            $table->string('apellidos');
            $table->string('nombres');
            $table->string('genero_id');
            $table->string('documento_id');
            $table->date('fechaNacimiento');
            $table->bigInteger('depaNacimiento_id');
            $table->bigInteger('munNacimiento_id');
            $table->string('telefono');
            $table->string('celular');
            $table->string('correo');
            $table->string('direccion');
            $table->string('depaDireccion_id');
            $table->bigInteger('munDireccion_id');
            $table->date('fechaActualizacion');
            $table->bigInteger('depaExpedicion_id');
            $table->bigInteger('munExpedicion_id');
            $table->bigInteger('estrato_id');
            $table->bigInteger('medioTransporte_id');
            $table->bigInteger('sisben_id');
            $table->bigInteger('rh_id');
            $table->bigInteger('eps');
            $table->bigInteger('zona_id');
            $table->bigInteger('estadoCivil_id');
            $table->string('nombreFamiliar');
            $table->string('celularFamiliar');
            $table->bigInteger('relacionFamiliar_id');
            $table->string('nombreInstitucion');
            $table->bigInteger('depInstitucion_id');
            $table->bigInteger('munInstitucion_id');
            $table->bigInteger('nivelAcademico_id');
            $table->string('tituloAcademico');
            $table->boolean('graduado');
            $table->integer('ultimoAno');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
