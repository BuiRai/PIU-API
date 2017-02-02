<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('level');
            $table->string('song_id')->default('test');
            $table->integer('stepmaker_id')->unsigned();
            $table->integer('style_id')->unsigned();

            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
            $table->foreign('stepmaker_id')->references('id')->on('stepmakers');
            $table->foreign('style_id')->references('id')->on('styles')->onDelete('cascade');

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
        
        Schema::dropIfExists('levels', function(Blueprint $table){
            $table->dropForeign(['song_id']);
            $table->dropColumn('song_id');
            $table->dropForeign(['stepmaker_id']);
            $table->dropColumn('stepmaker_id');
            $table->dropForeign(['style_id']);
            $table->dropColumn('style_id');
        });
    }
}
