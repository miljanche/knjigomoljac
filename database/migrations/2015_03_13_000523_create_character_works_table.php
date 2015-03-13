<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterWorksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('character_works', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('characters_id')->unsigned()->references('id')->on('characters');
            $table->integer('works_id')->unsigned()->references('id')->on('works');
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
		Schema::drop('character_works');
	}

}
