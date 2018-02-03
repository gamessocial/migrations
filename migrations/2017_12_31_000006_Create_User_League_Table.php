<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLeagueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vg_league_user', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->index();                              
            $table->integer('vg_league_id')->index();                            

            $table->enum('membership', ['admin', 'moderator', 'member']);
            $table->timestamp('joined_on')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('left_on')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vg_league_user');
    }
}
