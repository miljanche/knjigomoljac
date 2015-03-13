<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkListWorksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work_list_works', function(Blueprint $table) {
            $table->increments('id');
            $table->text('comment');
            $table->integer('works_id')->unsigned()->references('id')->on('works');
            $table->integer('work_lists_id')->unsigned()->references('id')->on('work_lists');
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
		Schema::drop('work_list_works');
	}

}
