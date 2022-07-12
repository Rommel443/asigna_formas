<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('ref1');
            $table->string('nref1');
            $table->integer('ref2');
            $table->string('nref2');
            $table->integer('don1');
            $table->string('ndon1');
            $table->integer('don2');
            $table->string('ndon2');
            $table->integer('don3');
            $table->string('ndon3');
            $table->integer('don4');
            $table->string('ndon4');
            $table->integer('estado');
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
        Schema::dropIfExists('positions');
    }
}
