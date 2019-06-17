<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRsvp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RSVP', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_urls_id');
            $table->string('name');
            $table->string('email');
            $table->string('mobile_no');
            $table->boolean('comming');
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
        Schema::dropIfExists('RSVP');
    }
}
