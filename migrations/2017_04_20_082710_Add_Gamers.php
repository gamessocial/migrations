<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGamers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('gamer')->insert([
            'player_api_id' => 'f2ae3a92-b7bc-11e4-9728-06d90c28bf1a',
            'name' => 'odds',
            'vainsocial_status' => 'supporter',
            'vainglory_ign' => 'odds',
            'vainglory_shard_id' => 'na',
            'vainglory_is_pro' => false,
        ]);

        DB::table('gamer')->insert([
            'player_api_id' => 'c57206b6-827a-11e4-8283-06eb725f8a76',
            'name' => 'Brian',
            'vainsocial_status' => 'supporter',
            'vainglory_ign' => 'Brian',
            'vainglory_shard_id' => 'na',
            'vainglory_is_pro' => false,
        ]);

        DB::table('gamer')->insert([
            'player_api_id' => 'f8782f7a-f9cb-11e6-b3f3-029cb633549e',
            'name' => 'ImmortalDhruv',
            'vainsocial_status' => 'supporter',
            'vainglory_ign' => 'ImmortalDhruv',
            'vainglory_shard_id' => 'sg',
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
