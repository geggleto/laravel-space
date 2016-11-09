<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Game extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            //starting techonologies
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('games');
    }
}
