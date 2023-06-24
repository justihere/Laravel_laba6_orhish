<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
     
      @return void
     
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->unsignedBigInteger('genre_id');
            $table->timestamps();

            $table->foreign('genre_id')->references('id')->on('genres');
        });
    }
     
     @return void
     
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
