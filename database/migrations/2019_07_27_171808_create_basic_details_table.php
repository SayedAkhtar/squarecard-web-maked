<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBasicDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('basic_details', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('user_urls_id');
			$table->string('event_name', 191)->nullable();
			$table->string('event_date', 191)->nullable();
			$table->string('bride_name', 191)->nullable();
			$table->string('groom_name', 191)->nullable();
			$table->string('venue', 191)->nullable();
			$table->string('address', 191)->nullable();
			$table->string('cover_image', 191)->nullable();
			$table->string('phone', 191)->nullable();
			$table->string('email', 191)->nullable();
			$table->string('about', 191)->nullable();
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
		Schema::drop('basic_details');
	}

}
