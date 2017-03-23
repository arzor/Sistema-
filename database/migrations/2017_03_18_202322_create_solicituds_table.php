<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicituds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lname');
            $table->string('email');
            $table->string('municipio');
			$table->string('servicio')->nullable();
            $table->string('image',200);
            $table->string('informacion');
            $table->integer('calificacion')->default(0);
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
        Schema::drop('solicituds');
    }
}