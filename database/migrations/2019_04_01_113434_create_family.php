<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamily extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Family', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_urls_id');
            $table->string('relation_name');
            $table->string('name');
            $table->string('image');
            $table->string('maritial_status');
            $table->string('bride_groom');
            $table->string('about');
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
        Schema::dropIfExists('Family');
    }
}
