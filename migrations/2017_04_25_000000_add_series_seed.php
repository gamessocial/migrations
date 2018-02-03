<?php

use Carbon\Carbon;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeriesSeed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
