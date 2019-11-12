<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            //Foreign key of Role
            $table->integer('Role_id')->unsigned();
            $table->foreign('Role_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
            //Foreign key of Cesi
            $table->integer('Cesi_id')->unsigned();
            $table->foreign('Cesi_id')->references('id')->on('Cesis')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->dropIfExists('user');
    }
}
