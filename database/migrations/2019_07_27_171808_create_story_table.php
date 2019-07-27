<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('story', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('user_urls_id');
			$table->string('story_title', 191)->nullable();
			$table->string('story_date', 191)->nullable();
			$table->string('story_venue', 191)->nullable();
			$table->text('story_short_description', 65535)->nullable();
			$table->text('story_long_description', 65535)->nullable();
			$table->string('story_image', 191)->nullable();
			$table->integer('story_like')->nullable()->default(0);
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
		Schema::drop('story');
	}

}
