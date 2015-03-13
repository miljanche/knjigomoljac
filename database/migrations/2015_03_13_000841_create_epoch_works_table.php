<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpochWorksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('epoch_works', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('works_id')->unsigned()->references('id')->on('works');
            $table->integer('epoch_id')->unsigned()->references('id')->on('epochs');
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
		Schema::drop('epoch_works');
	}

}
