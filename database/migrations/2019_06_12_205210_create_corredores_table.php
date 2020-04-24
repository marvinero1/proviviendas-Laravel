<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorredoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corredores', function (Blueprint $table) {
            $table->bigIncrements('id');           
            $table->unsignedBigInteger('cliente_id');
            $table->string('empresa')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('nit')->nullable();
            $table->string('celular')->nullable();
            $table->string('telefono')->nullable();
            $table->string('imagen')->nullable();
            $table->string('email')->nullable();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('corredores');
    }
}
