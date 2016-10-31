<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdminMedicamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Administrar_Medicamento', function (Blueprint $table) {
            $table->increments('Inventario_Medico_id');
            $table->date('Periodicidad');
            $table->float('Cantidad_Administracion');
            $table->date('Fecha_Fin');
            $table->foreign('Usuarios_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Administrar_Medicamento');
    }
}
