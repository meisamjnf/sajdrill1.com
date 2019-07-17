<?php namespace Meisam\Contact\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('meisam_contact_contacts1', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('comment')->nullable();
            $table->biginteger('phonenumber')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('meisam_contact_contacts');
    }
}
