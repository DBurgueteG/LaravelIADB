<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoIADBTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectoIADB', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('juego');
            $table->string('tipo');
            $table->date('fecha');
            $table->timestamp('createad_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectoIADB');
    }
}
