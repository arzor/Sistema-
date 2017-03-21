<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre',200);
            $table->string('apellido',200);
            $table->string('correo',200);
            $table->string('servicio',200);
            $table->string('especialidad',200);
            $table->string('telefono',200);
            $table->string('image',200);
            $table->string('municipio',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
    {
        Schema::drop('servicios');
    }
}