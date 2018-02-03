<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('series')->insert([
            'name' => 'all',
            'dimension_on' => 'player',
            'start'=> Carbon::createFromDate(2017, 1, 1),
            'end'=> Carbon::createFromDate(2020, 1, 1),
            'show_in_web' => true
        ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.2',
            'dimension_on' => 'player',
            'start'=> Carbon::createFromDate(2017, 1, 1),
            'end'=> Carbon::createFromDate(2017, 3, 27),
            'show_in_web' => true
        ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.3',
            'dimension_on' => 'player',
            'start'=> Carbon::createFromDate(2017, 3, 28),
            'end' => Carbon::createFromDate(2017, 4, 26),
            'show_in_web' => true
        ]);

        DB::table('series')->insert([
            'name' => 'all',
            'dimension_on' => 'global',
            'start'=> Carbon::createFromDate(2017, 1, 1),
            'end'=> Carbon::createFromDate(2020, 1, 1),
            'show_in_web' => true
        ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.2',
            'dimension_on' => 'global',
            'start'=> Carbon::createFromDate(2017, 1, 1),
            'end'=> Carbon::createFromDate(2017, 3, 27),
            'show_in_web' => true
        ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.3',
            'dimension_on' => 'global',
            'start'=> Carbon::createFromDate(2017, 3, 28),
            'end' => Carbon::createFromDate(2017, 4, 26),
            'show_in_web' => true
        ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.4',
            'dimension_on' => 'player',
            'start'=> Carbon::createFromDate(2017, 4, 26),
            'end' => Carbon::createFromDate(2017, 5, 31),
            'show_in_web' => true
        ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.4',
            'dimension_on' => 'global',
            'start'=> Carbon::createFromDate(2017, 4, 26),
            'end' => Carbon::createFromDate(2017, 5, 31),
            'show_in_web' => true
        ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.5',
            'dimension_on' => 'player',
            'start'=> Carbon::createFromDate(2017, 5, 31),
            'end' => Carbon::createFromDate(2017, 6, 21),
            'show_in_web' => true
        ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.5',
            'dimension_on' => 'global',
            'start'=> Carbon::createFromDate(2017, 5, 31),
            'end' => Carbon::createFromDate(2017, 6, 21),
            'show_in_web' => true
        ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.6',
            'dimension_on' => 'player',
            'start'=> Carbon::createFromDate(2017, 6, 21),
            'end' => Carbon::createFromDate(2017, 8, 8),
            'show_in_web' => true
        ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.6',
            'dimension_on' => 'global',
            'start'=> Carbon::createFromDate(2017, 6, 21),
            'end' => Carbon::createFromDate(2017, 8, 8),
            'show_in_web' => true
        ]);


        DB::table('series')->insert([
            'name' => 'Patch 2.7',
            'dimension_on' => 'player',
            'start'=> Carbon::now(),
            'end' => Carbon::createFromDate(2020, 6, 21),
            'show_in_web' => true
        ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.7',
            'dimension_on' => 'global',
            'start'=> Carbon::now(),
            'end' => Carbon::createFromDate(2020, 6, 21),
            'show_in_web' => true
        ]);

    }
}
