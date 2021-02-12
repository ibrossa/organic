<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('title');
            $table->float('price',8,2);
            $table->float('old_price',8,2)->nullable();
            $table->string('image');
            $table->text('description');
            $table->text('text');
            $table->string('contains');
            $table->tinyInteger('status')->nullable()->default(0);
            $table->enum('flag',['new','hot','null']);
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
        Schema::dropIfExists('products');
    }
}
