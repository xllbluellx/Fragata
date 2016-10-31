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
            $table->foreign('Usuarios_id');
            $table->foreign('Profesionistas_id');
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
