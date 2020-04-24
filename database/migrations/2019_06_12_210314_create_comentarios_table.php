<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('tabla_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->unsignedBigInteger('cliente_id')->unsigned();
            $table->text('comentario')->nullable();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');   
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
        Schema::dropIfExists('comentarios');
    }
}
