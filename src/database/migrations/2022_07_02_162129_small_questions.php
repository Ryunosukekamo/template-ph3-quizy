<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class smallQuestions extends Migration
{

    public function up()
    {
        Schema::create('smallQuestions', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('title');
            $table->string('picture');
            $table->unsignedBigInteger('big_question_id');
            $table->foreign('big_question_id')->references('id')->on('BigQuestions');
        });
    }

    public function down()
    {
        Schema::dropIfExists('smallQuestions');
    }
}
