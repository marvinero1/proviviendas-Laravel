<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->bigIncrements('id');          
            $table->bigInteger('pai_id')->unsigned();
            $table->enum('ciudad', ['lapaz','cochabamba','santacruz','oruro', 'potosi','chuquisaca','tarija','pando,','beni']);
            $table->text('descripcion')->nullable();
            $table->string('imagen')->nullable();            
            $table->foreign('pai_id')->references('id')->on('pais')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('ciudades');
    }
}
