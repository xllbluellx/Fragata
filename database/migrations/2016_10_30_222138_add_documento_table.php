<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDocumentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Documento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Usuarios_id')->unsigned();
            $table->enum('Tipo_de_documento',['Legal','Administrativo','Medico','Psicologo','Consejeria']);
            $table->foreign('Usuarios_id')->references('id')->on('Usuarios')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Ruta_archivo');
            $table->date('Periodicidad');
            $table->date('Vigencia');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Documento');
    }
}
