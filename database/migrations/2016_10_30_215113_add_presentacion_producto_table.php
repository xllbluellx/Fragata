<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPresentacionProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Presentacion_Producto', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('Presentacion',['Comprimidos','Liquidos','Aerosoles']);
            $table->string('Concentracion');   
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
        Schema::dropIfExists('Presentacion_Producto');
    }
}
