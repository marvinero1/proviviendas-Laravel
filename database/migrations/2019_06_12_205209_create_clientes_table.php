<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->enum('genero', ['masculino','femenino','otros']);
            $table->string('celular')->nullable();
            $table->text('telefono')->nullable();
            $table->string('ci')->nullable();
            $table->string('imagen')->nullable();
            $table->foreign('ciudad_id')->references('id')->on('ciudades')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->unsignedBigInteger('ciudad_id')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('clientes');
    }
}
