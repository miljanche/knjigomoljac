<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorListsAuthorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('author_lists_authors', function(Blueprint $table) {
            $table->increments('id');
            $table->text('comment');
            $table->integer('authors_id')->unsigned()->references('id')->on('authors');
            $table->integer('author_lists_id')->unsigned()->references('id')->on('author_lists');
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
		Schema::drop('author_lists_authors');
	}

}
