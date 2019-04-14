<?php namespace Meisam\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMeisamMovies extends Migration
{
    public function up()
    {
        Schema::table('meisam_movies_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('meisam_movies_', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('name', 191)->change();
        });
    }
}
