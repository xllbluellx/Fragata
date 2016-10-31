<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsuariosPeriodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuarios_Periodos', function (Blueprint $table) {
            $table->foreign('Usuarios_id')->references('id')->on('Usuarios')->onDelete('cascade')->onUpdate('cascade');;
            $table->timestamps('Fecha');
            $table->enum('Tipo',['Ingresó','Egresó']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Usuarios_Periodos');
    }
}
