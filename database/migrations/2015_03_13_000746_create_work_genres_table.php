<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkGenresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work_genres', function(Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('published');
            $table->integer('genre_id')->unsigned()->references('id')->on('genres');
            $table->integer('work_id')->unsigned()->references('id')->on('works');
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
		Schema::drop('work_genres');
	}

}
