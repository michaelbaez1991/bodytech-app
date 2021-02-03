<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('identificacion', 30);
            $table->enum('tipo_identificacion', ['CC', 'RC', 'TI', 'AS', 'MS', 'PA']);
            $table->string('primer_nombre', 30);
            $table->string('segundo_nombre', 30);
            $table->string('primer_apellido', 30);
            $table->string('segundo_apellido', 30);
            $table->string('direccion', 100);
            $table->string('telefono', 12);
            $table->string('correo', 50);
            $table->string('ocupacion', 100);
            
            $table->bigInteger('departamento_id')->unsigned();
            $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade');

            $table->bigInteger('municipio_id')->unsigned();
            $table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('cascade');

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
        Schema::dropIfExists('personas');
    }
}
