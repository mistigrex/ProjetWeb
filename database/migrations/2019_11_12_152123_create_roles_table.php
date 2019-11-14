<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::/*connection('mysql2')->*/create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        DB::/*connection('mysql2')->*/table('roles')->insert(
            [
                ['name' => 'Etudiant'],
                ['name' => 'Membre du BDE'],
                ['name' => 'Personnel CESI'],
            ]
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::/*connection('mysql2')->*/dropIfExists('roles');
    }
}
