<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('authors', function(Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->smallInteger('year_of_birth');
            $table->smallInteger('year_of_death');
            $table->text('wiki_link');
            $table->string('picture_URI', 100);
            $table->text('biography');
            $table->integer('states_id')->unsigned();
            $table->foreign('states_id')->references('id')->on('states');
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
		Schema::drop('authors');
	}

}
