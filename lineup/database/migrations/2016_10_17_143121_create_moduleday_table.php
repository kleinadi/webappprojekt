<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuledayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moduleday', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('timerange');
            $table->integer('day');
            $table->integer('fk_module')->unsigned();
            $table->foreign('fk_module')->references('id')->on('module');
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
        Schema::dropIfExists('moduleday');
    }
}
