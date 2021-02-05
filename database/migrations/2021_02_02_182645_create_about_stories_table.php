<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_stories', function (Blueprint $table) {
            $table->id();
            $table->string('title', 128);
            $table->string('about_title', 128);
            $table->string('image');
            $table->text('text');
            $table->integer('farm_count');
            $table->integer('farmer_count');
            $table->text('sec_text');

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
        Schema::dropIfExists('about_stories');
    }
}
