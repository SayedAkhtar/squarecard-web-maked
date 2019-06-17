<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Story', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_urls_id');
            $table->string('story_title');
            $table->string('story_date');
            $table->string('story_venue');
            $table->string('story_short_description');
            $table->string('story_long_description');
            $table->string('story_image')->nullable();
            $table->integer('story_like');
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
        Schema::dropIfExists('Story');
    }
}
