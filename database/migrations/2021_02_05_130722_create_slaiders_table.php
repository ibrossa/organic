<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlaidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slaiders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->tinyInteger('status');
            $table->text('description');
            $table->string('image');
            $table->string('logo');
            $table->string('small_text')->nullable();
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
        Schema::dropIfExists('slaiders');
    }
}
