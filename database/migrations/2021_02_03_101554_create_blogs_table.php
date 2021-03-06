<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('small_description');
            $table->text('description');
            $table->string('image');
            $table->string('author_name');
            $table->string('author_image');
            $table->text('author_text');
            $table->tinyInteger('status')->nullable()->default(0);
            $table->text('meta_title')->nullable();
            $table->text('meta_descriptions')->nullable();
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
        Schema::dropIfExists('blogs');
    }
}
