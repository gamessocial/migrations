<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGamerJune1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('gamer')->insert([
            'player_api_id' => '2537169e-2619-11e5-91a4-06eb725f8a76',
            'name' => 'Shiqan',
            'vainsocial_status' => 'Developer',
            'vainglory_ign' => 'Shiqan',
            'vainglory_shard_id' => 'eu',
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
