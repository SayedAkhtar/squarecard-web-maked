<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAboutTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('about', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_urls_id')->nullable();
			$table->string('groom_name', 191)->nullable();
			$table->string('groom_dob', 191)->nullable();
			$table->string('groom_profession', 191)->nullable();
			$table->text('groom_about', 65535)->nullable();
			$table->string('bride_name', 191)->nullable();
			$table->string('bride_dob', 191)->nullable();
			$table->string('bride_profession', 191)->nullable();
			$table->text('bride_about', 65535)->nullable();
			$table->string('groom_image', 191)->nullable();
			$table->string('bride_image', 191)->nullable();
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
		Schema::drop('about');
	}

}
