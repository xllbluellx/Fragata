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
            $table->integer('Inventario_Medico_id')->unsigned();
            $table->integer('Usuarios_id')->unsigned();
            $table->foreign('Inventario_Medico_id')->references('id')->on('Inventario_Medico')->onDelete('cascade')->onUpdate('cascade');
            $table->date('Periodicidad');
            $table->float('Cantidad_Administracion');
            $table->date('Fecha_Fin');
            $table->foreign('Usuarios_id')->references('id')->on('Usuarios')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('Administrar_Medicamento');
    }
}
