<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('save', function (Blueprint $table) {
            $table->increments('id');
            //Foreign key of Basket
            $table->integer('Basket_id')->unsigned();
            $table->foreign('Basket_id')->references('id')->on('basket')->onDelete('cascade')->onUpdate('cascade');
            //Foreign key of Product
            $table->integer('Product_id')->unsigned();
            $table->foreign('Product_id')->references('id')->on('product')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('save');
    }
}
