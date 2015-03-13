<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkLiteraryMovementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work_literary_movements', function(Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('published');
            $table->integer('literary_movements_id')->unsigned()->references('id')->on('literary_movements');
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
		Schema::drop('work_literary_movements');
	}

}
