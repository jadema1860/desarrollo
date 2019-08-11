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
            $table->string('numeroIdentificacion');
            $table->string('codigoMatricula');
            $table->string('idEstadoMatricula');
            $table->date('fechaMatricula');
            $table->boolean('matriculaFormalizada');
            $table->text('observacion');
            $table->boolean('transferencia');
            $table->boolean('mediaTecnica');
            $table->integer('idPrograma');
            $table->integer('idJoranda');
            $table->integer('idSemestre');
            $table->integer('idPeriodo');
            $table->date('fechaMatricualInicial');
            $table->date('fechaEgreso');
            $table->integer('acta');
            $table->integer('folio');
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
