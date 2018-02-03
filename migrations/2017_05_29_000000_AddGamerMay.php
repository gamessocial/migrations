<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGamerMay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('gamer')->insert([
            'player_api_id' => '6d635ffc-fa64-11e5-bbd9-068789513eb5',
            'name' => 'Ayshel',
            'vainsocial_status' => 'Supporter',
            'vainglory_ign' => 'Ayshel',
            'vainglory_shard_id' => 'eu',
            'vainglory_is_pro' => false,
        ]);

        DB::table('gamer')->insert([
            'player_api_id' => '627cf718-fa61-11e5-b541-06b48b82cd49',
            'name' => 'Garlock',
            'vainsocial_status' => 'Supporter',
            'vainglory_ign' => 'Garlock',
            'vainglory_shard_id' => 'eu',
            'vainglory_is_pro' => false,
        ]);

        DB::table('gamer')->insert([
            'player_api_id' => 'daceee88-a8cb-11e6-9fc1-068789513eb5',
            'name' => 'Terapia',
            'vainsocial_status' => 'Contributor',
            'vainglory_ign' => 'Terapia',
            'vainglory_shard_id' => 'eu',
            'vainglory_is_pro' => false,
        ]);

        DB::table('gamer')->insert([
            'player_api_id' => '3651bcbe-b646-11e5-867a-06d90c28bf1a',
            'name' => 'EzeKiel',
            'vainsocial_status' => 'Contributor',
            'vainglory_ign' => 'EzeKiel',
            'vainglory_shard_id' => 'eu',
            'vainglory_is_pro' => false,
        ]);

        DB::table('gamer')->insert([
            'player_api_id' => 'de0d05b6-e18b-11e4-b877-06d90c28bf1a',
            'name' => 'maegz',
            'vainsocial_status' => 'Partner, NACL',
            'vainglory_ign' => 'maegz',
            'vainglory_shard_id' => 'na',
            'vainglory_is_pro' => false,
        ]);

        DB::table('gamer')->insert([
            'player_api_id' => '68939eae-6ed0-11e4-af50-062d0b175276',
            'name' => 'angelwolf',
            'vainsocial_status' => 'Partner, NACL',
            'vainglory_ign' => 'angelwolf',
            'vainglory_shard_id' => 'na',
            'vainglory_is_pro' => false,
        ]);

        DB::table('gamer')->insert([
            'player_api_id' => '49f38bb2-3892-11e5-84b0-06eb725f8a76',
            'name' => 'Finch32',
            'vainsocial_status' => 'Partner, NACL',
            'vainglory_ign' => 'Finch32',
            'vainglory_shard_id' => 'na',
            'vainglory_is_pro' => false,
        ]);

        DB::table('gamer')->insert([
            'player_api_id' => '34b21156-d482-11e5-bc88-06f4ee369f53',
            'name' => 'Shel',
            'vainsocial_status' => 'Partner, NACL',
            'vainglory_ign' => 'Shel',
            'vainglory_shard_id' => 'na',
            'vainglory_is_pro' => false,
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
