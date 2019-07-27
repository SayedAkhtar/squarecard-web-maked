<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFamilyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('family', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('user_urls_id');
			$table->string('relation_name', 191)->nullable();
			$table->string('name', 191)->nullable();
			$table->string('image', 191)->nullable();
			$table->string('maritial_status', 191)->nullable();
			$table->string('profession', 191)->nullable();
			$table->string('bride_groom', 191);
			$table->string('about', 191)->nullable();
			$table->integer('age')->nullable();
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
		Schema::drop('family');
	}

}
