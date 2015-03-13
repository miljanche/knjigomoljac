<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisteredUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registered_users', function(Blueprint $table) {
            $table->increments('id')->references('id')->on('general_users');
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('password');
            $table->string('email', 50);
            $table->string('pictureURI');
            $table->integer('privileges_id')->unsigned()->references('id')->on('privileges');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('registered_users');
	}

}
