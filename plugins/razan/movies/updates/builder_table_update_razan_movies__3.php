<?php namespace Razan\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRazanMovies3 extends Migration
{
    public function up()
    {
        Schema::table('razan_movies_', function($table)
        {
            $table->dropColumn('actors');
        });
    }
    
    public function down()
    {
        Schema::table('razan_movies_', function($table)
        {
            $table->text('actors')->nullable();
        });
    }
}
