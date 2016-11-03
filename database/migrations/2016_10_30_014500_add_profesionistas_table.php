<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfesionistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Profesionistas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->string('Correo_Electronico')->unique();
            $table->string('Password');
            $table->date('Fecha_Nacimiento');
            $table->string('RFC');
            $table->string('IFE');
            $table->string('Cedula');
            $table->enum('status',['Activo','Inactivo'])->default('Activo');
            $table->rememberToken();
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
        Schema::dropIfExists('Profesionistas');
    }
}
