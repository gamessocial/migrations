<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupVGIFAsGamers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('gamer')->insert([
            'player_api_id' => '2f77ee16-e6d1-11e5-af7f-06eb725f8a76',
            'name' => 'Kronos9231',
            'vainsocial_status' => 'pro',
            'vainglory_ign' => 'Kronos9231',
            'vainglory_shard_id' => 'sea',
            'vainglory_is_pro' => true,
        ]);

        DB::table('gamer')->insert([
            'player_api_id' => '89ec3b76-9f74-11e5-8510-0628b69bf6d1',
            'name' => 'Eshxx',
            'vainsocial_status' => 'pro',
            'vainglory_ign' => 'Eshxx',
            'vainglory_shard_id' => 'sea',
            'vainglory_is_pro' => true,
        ]);

        DB::table('gamer')->insert([
            'player_api_id' => 'ed75203e-3e6e-11e5-9190-0628b69bf6d1',
            'name' => 'Prithvi',
            'vainsocial_status' => 'pro',
            'vainglory_ign' => 'Prithvi',
            'vainglory_shard_id' => 'sea',
            'vainglory_is_pro' => true,
        ]);

        Schema::table('gamer', function(Blueprint $table){
            $sql = 'delete from gamer where name in ("4ever")';
            DB::connection()->getPdo()->exec($sql);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gamer', function(Blueprint $table){
            $sql = 'delete from gamer where name in ("Prithvi", "Eshxx", "Kronos9231")';
            DB::connection()->getPdo()->exec($sql);
        });
    }
}
