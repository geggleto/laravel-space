<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamePlayer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_players', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('game_id')->unsigned();
            $table->foreign('game_id')->references('id')->on('games');

            $table->integer('ore')->default('3000');
            $table->integer('production')->default('3000');
            $table->integer('credits')->default('3000');

            //Player technology level
            $table->integer('tech_ore')->default(1);
            $table->integer('tech_economy')->default(1);
            $table->integer('tech_production')->default(1);
            $table->integer('tech_research')->default(1);
            $table->integer('tech_beam')->default(1);
            $table->integer('tech_missile')->default(1);
            $table->integer('tech_fighter')->default(1);
            $table->integer('tech_sensor')->default(1);
            $table->integer('tech_engine')->default(1);
            $table->integer('tech_shield')->default(1);
            $table->integer('tech_armor')->default(1);
            $table->integer('tech_hull')->default(1);
            $table->integer('tech_ship_design')->default(1);
            $table->integer('tech_evasion')->default(1);

            $table->integer('total_tech_level')->default(14);
            $table->integer('research_spent')->default(0);
            $table->integer('next_level_up')->default(250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('game_players');
    }
}
