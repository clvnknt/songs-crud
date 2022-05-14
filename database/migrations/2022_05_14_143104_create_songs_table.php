<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string("song_title");
            $table->string("song_genre");
            $table->string("composer_name");
            $table->string("song_lyrics");
            $table->string("year_created");
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('songs');
    }
};