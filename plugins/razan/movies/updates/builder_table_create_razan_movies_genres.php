<?php namespace Razan\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRazanMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('razan_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('general_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('razan_movies_genres');
    }
}
