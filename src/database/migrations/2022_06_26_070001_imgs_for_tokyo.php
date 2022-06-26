<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImgsForTokyo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('ImgsForTokyo',function(Blueprint $table){
        //     $table->increments('id');
        //     $table->string('imgs');
        // });

        Schema::create('ImgsForTokyo',function(Blueprint $table){
            $table->increments('id');
            $table->string('img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ImgsForTokyo');
    }
}
