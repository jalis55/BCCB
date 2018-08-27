<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('player_id');
            $table->string('f_name');
            $table->string('m_name');
            $table->string('l_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->date('dob');
            $table->string('present_address');
            $table->string('parmanent_address');
            $table->string('membership');
            $table->string('player_sign');
            $table->string('signature_date');
            $table->string('email');
            $table->string('password');
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
        Schema::dropIfExists('players');
    }
}
