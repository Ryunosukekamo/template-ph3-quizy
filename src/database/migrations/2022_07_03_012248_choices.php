<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Choices extends Migration
{

    public function up()
    {
        Schema::create('Choices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('choice');
            $table->boolean('valid');
            $table->unsignedBigInteger('small_question_id');
            $table->foreign('small_question_id')->references('id')->on('smallQuestions');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Choices');
    }
}
