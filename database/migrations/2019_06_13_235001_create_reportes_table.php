<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tabla_id')->unsigned();
            $table->string('type_id')->nullable();
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->string('reporte');
            $table->text('descripcion')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('reportes');
    }
}
