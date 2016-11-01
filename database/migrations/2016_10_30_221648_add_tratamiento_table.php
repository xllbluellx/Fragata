<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTratamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tratamiento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Usuarios_id')->unsigned();
            $table->integer('Profesionistas_id')->unsigned();
            $table->foreign('Usuarios_id')->references('id')->on('Usuarios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Profesionistas_id')->references('id')->on('Profesionistas')->onDelete('cascade')->onUpdate('cascade');
            $table->date('Fecha_Expedicion');
            $table->enum('status',['Activo','Inactivo'])->default('Activo');
            $table->date('Fecha_Fin_Tratamiento');
            $table->string('Indicaciones');
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
        Schema::dropIfExists('Tratamiento');
    }
}
