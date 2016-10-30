<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDotacionMedicamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Dotacion_Medicamento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre_Medicamento');
            $table->float('Cantidad_Donada');
            $table->string('Nombre_Donador');
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
        Schema::dropIfExists('Dotacion_Medicamento');
    }
}
