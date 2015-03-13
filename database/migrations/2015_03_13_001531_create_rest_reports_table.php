<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rest_reports', function(Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->string('email', 50);
            $table->integer('general_users_id')->unsigned()->references('id')->on('general_users');
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
		Schema::drop('rest_reports');
	}

}
