<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('text');
            $table->string('image');
            //Foreign key of User
            $table->integer('Author_id')->unsigned();
            $table->foreign('Author_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            //Foreign key of Activity
            $table->integer('Activity_id')->unsigned();
            $table->foreign('Activity_id')->references('id')->on('manifestations')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('comments');
    }
}
