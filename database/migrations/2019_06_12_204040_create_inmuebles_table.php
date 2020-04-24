<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->bigIncrements('id');          
            $table->string('titulo')->nullable();
            $table->text('descripcion')->nullable();          
            $table->enum('oferta', ['venta','alquiler', 'anticretico']);
            $table->enum('tipo_inmueble', ['casa','departamento','garzonier','lote']);
            $table->enum('estado', ['disponible','vendido']);
            $table->string('imagen')->nullable();
            $table->string('direccion')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('precio')->nullable();
            $table->string('celular')->nullable();
            $table->string('telefono')->nullable();
            $table->string('whatsapp')->nullable();
            $table->unsignedBigInteger('tipoInmueble_id')->nullable();
            $table->foreign('tipoInmueble_id')->references('id')->on('tipo_inmuebles')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('inmuebles');
    }
}
