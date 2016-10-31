<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInventarioMedicotable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Inventario_Medico', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre');
            $table->string('Codigo');
            $table->string('Laboratorio');
            $table->string('Presentacion_Producto_id');
            $table->enum('Controlado',['Si','No']);
            $table->date('Fecha_Ingreso_Medicamento');
            $table->float('Cantidad');  
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
        Schema::dropIfExists('Inventario_Medico');
    }
}