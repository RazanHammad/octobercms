<?php namespace Razan\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRazanMovies extends Migration
{
    public function up()
    {
        Schema::table('razan_movies_', function($table)
        {
            $table->text('slug')->nullable();
            $table->text('description')->nullable()->change();
            $table->integer('year')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('razan_movies_', function($table)
        {
            $table->dropColumn('slug');
            $table->text('description')->nullable(false)->change();
            $table->integer('year')->nullable(false)->change();
        });
    }
}
