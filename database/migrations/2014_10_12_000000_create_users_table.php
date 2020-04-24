<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('apellido')->nullable();
            $table->enum('ciudad', ['la_paz','cbba','stcz','oruro','potosi','sucre','tarija','beni','pando'])->nullable();
            $table->string('nombre_usuario')->nullable();
            $table->string('imagen_perfil')->nullable();
            $table->string('celular')->nullable();
            $table->string('telefono')->nullable();          
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
