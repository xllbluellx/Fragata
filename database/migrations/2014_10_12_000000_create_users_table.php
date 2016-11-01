<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->date('Fecha_Nacimiento');
            $table->string('IFE');
            $table->enum('status',['Activo','Inactivo'])->default('Activo');
            $table->string('Nombre_Tutor');
            $table->string('Observaciones');
            //$table->string('email')->unique();
            //$table->string('password');
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
        Schema::drop('users');
    }
}
