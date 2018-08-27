<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreviousHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previous_histories', function (Blueprint $table) {
            $table->increments('his_id');
            $table->string('p_clubName');
            $table->string('from');
            $table->string('to');
            $table->integer('total_run');
            $table->integer('total_wicket');
            $table->integer('team_leader');
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
        Schema::dropIfExists('previous_histories');
    }
}
