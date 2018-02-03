<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('filter')->insert([
            'id' => 1,
            'name' => 'all',
            'dimension_on' => 'player',
            'filter'=> '',
            'filter_hash'=> ''
        ]);

        DB::table('filter')->insert([
            'id' => 2,
            'name' => 'all',
            'dimension_on' => 'global',
            'filter'=> '',
            'filter_hash'=> ''
        ]);
    }
}
