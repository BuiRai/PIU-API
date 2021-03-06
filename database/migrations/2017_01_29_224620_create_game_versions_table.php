<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gameVersions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('launch_year');
            $table->string('banner_image')->default('http://www.mooreslandinghomes.com/Common/images/jquery/galleria/image-not-found.png');
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
        Schema::dropIfExists('gameVersions');
    }
}
