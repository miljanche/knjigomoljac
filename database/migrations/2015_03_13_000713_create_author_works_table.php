<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorWorksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('author_works', function(Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('published');
            $table->integer('authors_id')->unsigned()->references('id')->on('authors');
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
		Schema::drop('author_works');
	}

}
