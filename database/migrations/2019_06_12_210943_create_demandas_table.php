<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandas', function (Blueprint $table) {
            $table->bigIncrements('id');         
            $table->string('titulo')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->string('whatsapp')->nullable();
            $table->enum('estado', ['desactivado','activado']); 
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandas');
    }
}
