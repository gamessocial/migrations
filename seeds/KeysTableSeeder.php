<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class KeysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Configs
        DB::table('keys')->insert([
            'type' => 'config',
            'key' => 'page_size',
            'value' => '10'
        ]);

        DB::table('keys')->insert([
            'type' => 'config',
            'key' => 'hp_fans',
            'value' => '3'
        ]);
    }
}
