<?php

use Illuminate\Database\Seeder;

class GamerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('gamer')->insert([
            'player_api_id' => '44693bc0-9f02-11e5-ad28-06eb725f8a76',
            'name' => 'StormCallerSr',
            'vainsocial_status' => 'developer',
            'vainglory_ign' => 'StormCallerSr',
            'vainglory_shard_id' => 'sg',
            'vainglory_is_pro' => false,
        ]);

        DB::table('gamer')->insert([
            'player_api_id' => '8f454688-2fe5-11e6-9433-06d90c28bf1a',
            'name' => 'shutterfly',
            'vainsocial_status' => 'developer',
            'vainglory_ign' => 'shutterfly',
            'vainglory_shard_id' => 'eu',
            'vainglory_is_pro' => false,
        ]);

        DB::table('gamer')->insert([
            'player_api_id' => 'c865b42e-5b01-11e6-91aa-06fc87f1dd11',
            'name' => 'HellsByte',
            'vainsocial_status' => 'supporter',
            'vainglory_ign' => 'HellsByte',
            'vainglory_shard_id' => 'eu',
            'vainglory_is_pro' => false,
        ]);

        DB::table('gamer')->insert([
            'player_api_id' => '1314f3f8-c53b-11e4-946e-06eb725f8a76',
            'name' => 'idmonfish',
            'vainsocial_status' => 'supporter',
            'vainglory_ign' => 'idmonfish',
            'vainglory_shard_id' => 'sg',
            'vainglory_is_pro' => false,
        ]);

        DB::table('gamer')->insert([
            'player_api_id' => '844b66aa-d359-11e6-b4c3-06ab1a16f8e5',
            'name' => 'kamaelxiii',
            'vainsocial_status' => 'supporter',
            'vainglory_ign' => 'kamaelxiii',
            'vainglory_shard_id' => 'sg',
            'vainglory_is_pro' => false,
        ]);

    }
}
