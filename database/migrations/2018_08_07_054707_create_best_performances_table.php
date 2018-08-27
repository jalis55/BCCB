<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBestPerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('best_performances', function (Blueprint $table) {
            $table->increments('perform_id');
            $table->string('b_clubName');
            $table->string('b_opClubName');
            $table->integer('b_eventId');
            $table->integer('b_matchId');
            $table->string('b_runs');
            $table->string('b_wickets');
            $table->integer('player_id');            
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
        Schema::dropIfExists('best_performances');
    }
}
