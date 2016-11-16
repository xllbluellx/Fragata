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
           // $table->integer('Presentacion_Producto_id')->unsigned();
            $table->string('Nombre');
            $table->string('Codigo');
            $table->string('Laboratorio');
           // $table->foreign('Presentacion_Producto_id')->references('id')->on('Presentacion_Producto')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('Controlado',['Si','No']);
            $table->enum('Presentacion',['Comprimidos','Liquidos','Aerosoles']);             
            $table->string('Concentracion');   
            $table->float('Cantidad');
            $table->date('Fecha_Ingreso_Medicamento');
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
