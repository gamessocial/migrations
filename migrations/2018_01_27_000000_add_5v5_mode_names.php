<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5V5ModeNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('game_mode')->insert([
            'name' => '5v5_casual'
        ]);
        DB::table('game_mode')->insert([
            'name' => '5v5_ranked'
        ]);
        DB::table('game_mode')->insert([
            'name' => 'priv_5v5_blind'
        ]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
