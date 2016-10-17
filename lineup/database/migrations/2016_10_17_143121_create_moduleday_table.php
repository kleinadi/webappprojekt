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
            $table->integer('fk_module')->unsigned();
            $table->foreign('fk_module')->references('id')->on('module');
            $table->integer('fk_day')->unsigned();
            $table->foreign('fk_day')->references('id')->on('day');
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
