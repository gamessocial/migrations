<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStandardModeNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('game_mode')->insert([
            'name' => 'all'
        ]);
        DB::table('game_mode')->insert([
            'name' => 'casual'
        ]);
        DB::table('game_mode')->insert([
            'name' => 'ranked'
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
