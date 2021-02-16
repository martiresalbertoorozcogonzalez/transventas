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

            $table->string('titulo', 100);
            $table->double('precio');
            $table->string('millaje');
            $table->longText('descripcion');
            $table->string('telefono');
            $table->string('imagen_principal');
            $table->time('apertura');
            $table->time('cierre');
            $table->uuid('uuid');

            $table->foreignId('user_id')->constrained();

            $table->foreignId('categoria_id')->constrained();

            $table->foreignId('ubicacion_id')->constrained();

            $table->foreignId('condicion_id')->constrained();

            $table->foreignId('modelo_id')->constrained();

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
        Schema::dropIfExists('modelos');
        Schema::dropIfExists('publicacions');
    }
}
