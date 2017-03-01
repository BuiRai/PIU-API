<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->string('id', 32)->unique();
            $table->string('title');
            $table->string('bpm');
            $table->string('bannerImage')->default('http://www.mooreslandinghomes.com/Common/images/jquery/galleria/image-not-found.png');
            $table->integer('artist_id')->unsigned();

            $table->primary('id');
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
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
        Schema::dropIfExists('songs', function(Blueprint $table){
            $table->dropForeign(['artist_id']);
            $table->dropColumn('artist_id');
        });
    }
}
