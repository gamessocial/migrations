<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGamer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('gamer')->insert([
            'player_api_id' => '6eab29f6-eed5-11e6-ba5f-068789513eb5',
            'name' => 'LighteningThief',
            'vainsocial_status' => 'fan',
            'vainglory_ign' => 'LighteningThief',
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
