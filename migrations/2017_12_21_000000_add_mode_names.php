<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModeNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('game_mode')->insert([
            'name' => 'priv_blind'
        ]);
        DB::table('game_mode')->insert([
            'name' => 'priv_draft'
        ]);
        DB::table('game_mode')->insert([
            'name' => 'blitz'
        ]);
        DB::table('game_mode')->insert([
            'name' => 'priv_blitz'
        ]);
        DB::table('game_mode')->insert([
            'name' => 'br'
        ]);
        DB::table('game_mode')->insert([
            'name' => 'priv_br'
        ]);
        DB::table('game_mode')->insert([
            'name' => 'onslaught'
        ]);
        DB::table('game_mode')->insert([
            'name' => 'priv_onslaught'
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
