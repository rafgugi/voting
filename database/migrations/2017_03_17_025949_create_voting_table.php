<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotingTable extends Migration
{

    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('questions_id')->unsigned();
            $table->foreign('questions_id')->references('id')->on('questions')->onDelete('cascade');
            $table->string('option');
            $table->integer('count');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('options');
        Schema::drop('questions');
    }

}
