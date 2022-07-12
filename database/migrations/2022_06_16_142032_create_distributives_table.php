<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributives', function (Blueprint $table) {
            $table->id();
            $table->string('cedula')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('nombres')->nullable();
            $table->datetime('fecha_programada_inicio')->nullable();
            $table->integer('asignatura')->nullable();
            $table->integer('duracion_prueba')->nullable();
            $table->integer('tolerancia')->nullable();
            $table->integer('laboratorio')->nullable();
            $table->string('amie')->nullable();
            $table->string('institucion')->nullable();
            $table->string('aplicadorid')->nullable();
            $table->string('aplicador')->nullable();
            $table->string('forma')->nullable();
            $table->integer('parroquia_id')->nullable();
            $table->foreignId('period_id')->references('id')->on('periods')->onDelete('cascade');
            $table->string('sesion')->nullable();
            $table->string('coordinador')->nullable();
            $table->string('tecnico')->nullable();
            $table->string('supervisor')->nullable();
            $table->string('corresponsal')->nullable();
            $table->integer('formas_asignadas')->nullable();
            $table->integer('formas_asignadas_con')->nullable();
            
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
        Schema::dropIfExists('distributives');
    }
}
