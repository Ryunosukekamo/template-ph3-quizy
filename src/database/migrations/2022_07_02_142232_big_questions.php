<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BigQuestions extends Migration
{

    public function up()
    {
        Schema::create('BigQuestions', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('title');
        });
    }

    public function down()
    {
        Schema::dropIfExists('BigQuestions');
    }
}
