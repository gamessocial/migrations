<?php

use Carbon\Carbon;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GameModeEnhancement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('game_mode', function (Blueprint $table) {
            $table->enum('type', ['3v3', 'brawl', '5v5', 'none']);
            $table->enum('public_mode_types', ['3v3', 'brawl', '5v5', 'none']);
            $table->integer('display_rank');
        });

        DB::table('game_mode')
            ->where('name', 'all')
            ->update([
                'type' => 'none'
            ]);

        DB::table('game_mode')
            ->whereIn('name', ['casual', 'ranked', 'priv_blind', 'priv_draft'])
            ->update([
                'type' => '3v3'
            ]);

        DB::table('game_mode')
            ->whereIn('name', ['5v5_casual', '5v5_ranked', 'priv_5v5_blind'])
            ->update([
                'type' => '5v5'
            ]);

        DB::table('game_mode')
            ->whereIn('name', ['blitz', 'br', 'onslaught', 'priv_blitz', 'priv_br', 'priv_onslaught'])
            ->update([
                'type' => 'brawl'
            ]);


        DB::table('game_mode')
            ->whereIn('name', ['all', 'priv_blind', 'priv_draft', 'priv_5v5_blind', 'priv_blitz', 'priv_br', 'priv_onslaught'])
            ->update([
                'public_mode_types' => 'none'
            ]);

        DB::table('game_mode')
            ->whereIn('name', ['casual', 'ranked'])
            ->update([
                'public_mode_types' => '3v3'
            ]);

        DB::table('game_mode')
            ->whereIn('name', ['5v5_casual', '5v5_ranked'])
            ->update([
                'public_mode_types' => '5v5'
            ]);

        DB::table('game_mode')
            ->whereIn('name', ['blitz', 'br', 'onslaught'])
            ->update([
                'public_mode_types' => 'brawl'
            ]);

        // update display ranks for all modes
        DB::table('game_mode')
            ->where('name', 'all')
            ->update([
                'display_rank' => 1
            ]);

        DB::table('game_mode')
            ->where('name', 'casual')
            ->update([
                'display_rank' => 2
            ]);

        DB::table('game_mode')
            ->where('name', 'ranked')
            ->update([
                'display_rank' => 3
            ]);

        DB::table('game_mode')
            ->where('name', '5v5_casual')
            ->update([
                'display_rank' => 4
            ]);

        DB::table('game_mode')
            ->where('name', '5v5_ranked')
            ->update([
                'display_rank' => 5
            ]);

        DB::table('game_mode')
            ->where('name', 'br')
            ->update([
                'display_rank' => 6
            ]);

        DB::table('game_mode')
            ->where('name', 'blitz')
            ->update([
                'display_rank' => 7
            ]);

        DB::table('game_mode')
            ->where('name', 'onslaught')
            ->update([
                'display_rank' => 8
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('game_mode', function (Blueprint $table) {
            $table->dropColumn("type");
            $table->dropColumn("public_mode_types");
            $table->dropColumn("display_rank");
        });
    }
}
