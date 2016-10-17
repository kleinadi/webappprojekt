<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsermoduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usermodule', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_users')->unsigned();
            $table->foreign('fk_users')->references('id')->on('users');
            $table->integer('fk_module')->unsigned();
            $table->foreign('fk_module')->references('id')->on('module');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usermodule');
    }
}
