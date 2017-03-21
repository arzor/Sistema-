<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactenosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactenos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre',200);
             $table->string('municipio',200);
            $table->string('correo',200);
            $table->string('telefono',200);
            $table->string('direccion',200);
            $table->string('descripcion',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contactenos');
    }
}