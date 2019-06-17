<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Schedule', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_urls_id');
            $table->string('event_name');
            $table->string('event_start_date');
            $table->string('event_start_time');
            $table->string('event_end_date');
            $table->string('event_end_time');
            $table->string('event_venue')->nullable();
            $table->string('event_short_description')->nullable();
            $table->string('event_long_description')->nullable();
            $table->string('event_image')->nullable();
            $table->string('event_note')->nullable();
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
        Schema::dropIfExists('Schedule');
    }
}
