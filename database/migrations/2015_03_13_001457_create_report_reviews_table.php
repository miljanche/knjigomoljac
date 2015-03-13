<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('report_reviews', function(Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->text('description');
            $table->integer('reviews_id')->unsigned()->references('id')->on('reviews');
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
		Schema::drop('report_reviews');
	}

}
