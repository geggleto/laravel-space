<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_systems', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('game_id')->unsigned();
            $table->foreign('game_id')->references('id')->on('games');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            //Player technology level
            $table->integer('building_ore')->default(0);        //Mines
            $table->integer('building_economy')->default(0);    //Houses
            $table->integer('building_production')->default(0); //Factorys
            $table->integer('building_research')->default(0);   //Research Labs

            $table->integer('total_land')->default(2500);
            $table->integer('unused_land')->default(0);

            $table->integer('is_homeworld')->default(0);
            $table->integer('original_owner')->default(0);

            $table->integer('total_jobs')->default(0);
            $table->integer('unemployment')->default(0);

            $table->integer('population')->default(0);
            $table->integer('max_population')->default(0);

            $table->integer('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_systems');
    }
}
