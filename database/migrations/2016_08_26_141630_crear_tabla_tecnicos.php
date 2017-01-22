<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTecnicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tecnicos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre',200);
            $table->string('correo',200);
            $table->string('direccion',200);
            $table->string('contacto',200);
            $table->string('telefono',200);
            //$table->integer('clasificacion_id');
            //$table->foreign('clasificacion_id')->references('id')->on('clasificacion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Tecnicos');
    }
}
