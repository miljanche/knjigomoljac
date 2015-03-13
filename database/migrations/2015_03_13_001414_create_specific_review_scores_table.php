<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecificReviewScoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('specific_review_scores', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('review_scores_id')->unsigned()->references('id')->on('review_scores');
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
		Schema::drop('specific_review_scores');
	}

}
