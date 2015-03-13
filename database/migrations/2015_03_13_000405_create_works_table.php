<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('works', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->smallInteger('publishing_year');
            $table->text('description');
            $table->integer('literary_forms_id')->unsigned()->references('id')->on('literary_forms');
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
		Schema::drop('works');
	}

}
