<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScheduleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schedule', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('user_urls_id');
			$table->string('event_name', 191)->nullable();
			$table->string('event_start_date', 191)->nullable();
			$table->string('event_start_time', 191)->nullable();
			$table->string('event_end_date', 191)->nullable();
			$table->string('event_end_time', 191)->nullable();
			$table->string('event_venue', 191)->nullable();
			$table->string('event_short_description', 191)->nullable();
			$table->string('event_long_description', 191)->nullable();
			$table->string('event_image', 191)->nullable();
			$table->string('event_note', 191)->nullable();
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
		Schema::drop('schedule');
	}

}
