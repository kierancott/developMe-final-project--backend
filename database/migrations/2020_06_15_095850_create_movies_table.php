<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string("name", 140);
            $table->integer("year");
        });

        // create the pivot table using the Eloquent naming convention
        Schema::create("movie_person", function (Blueprint $table) { 
            // still have an id column
            $table->id();
            // create the people id column and foreign key
            $table->foreignId("person_id")->unsigned(); $table->foreign("person_id")->references("id")
            ->on("people")->onDelete("cascade");
            // create the movie id column and foreign key
            $table->foreignId("movie_id")->unsigned(); $table->foreign("movie_id")->references("id")
            ->on("movies")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_person');
        Schema::dropIfExists('movies');
    }
}
