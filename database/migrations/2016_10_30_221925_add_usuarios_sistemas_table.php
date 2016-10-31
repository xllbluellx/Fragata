<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsuariosSistemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuarios_Sistema', function (Blueprint $table) {
            $table->foreign('Profesionistas_id')->references('id')->on('Profesionistas')->onDelete('cascade')->onUpdate('cascade');;
            $table->enum('Tipo_Usuario',['Administrador','Medicamento','Psicologo','Tutor']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Usuarios_Sistema');
    }
}
