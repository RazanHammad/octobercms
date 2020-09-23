<?php namespace Razan\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRazanMoviesMoviesActors extends Migration
{
    public function up()
    {
        Schema::create('razan_movies_movies_actors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id')->unsigned();
            $table->integer('actor_id')->unsigned();
            $table->primary(['movie_id','actor_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('razan_movies_movies_actors');
    }
}
