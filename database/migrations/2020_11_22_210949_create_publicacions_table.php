<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('categorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('ubicacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('condicions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('modelos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('publicacions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('user_id')->unsigned();

            $table->bigInteger('category_id')->unsigned();

            $table->bigInteger('ubicacion_id')->unsigned();

            $table->bigInteger('condicion_id')->unsigned();

            $table->bigInteger('modelo_id')->unsigned();

            $table->string('titulo', 100);
            $table->double('precio');
            $table->string('millaje');
            $table->longText('descripcion');
            $table->string('telefono');
            $table->string('imagen_principal');
            $table->time('apertura');
            $table->time('cierre');
            $table->uuid('uuid');

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('category_id')->references('id')->on('categorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('ubicacion_id')->references('id')->on('ubicacions')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('condicion_id')->references('id')->on('condicions')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('modelo_id')->references('id')->on('modelos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
        Schema::dropIfExists('predios');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('ubicacions');
        Schema::dropIfExists('condicions');
        Schema::dropIfExists('publicacions');
    }
}
