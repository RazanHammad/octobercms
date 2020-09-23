<?php namespace Razan\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRazanMovies extends Migration
{
    public function up()
    {
        Schema::create('razan_movies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('year');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('razan_movies_');
    }
}
