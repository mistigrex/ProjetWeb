<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComposedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('composed', function (Blueprint $table) {
            $table->increments('id');
            //foreign key of Oder
            $table->integer('Order_id')->unsigned();
            $table->foreign('Order_id')->references('id')->on('order')->onDelete('cascade')->onUpdate('cascade');
        // foreign key of Product
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
        Schema::dropIfExists('composed');
    }
}
