<?php

use Carbon\Carbon;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeriesPatch27 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('series')
            ->where('name', 'Patch 2.6')
            ->update([
                'end' => Carbon::createFromDate(2017, 8, 8)
            ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.7',
            'dimension_on' => 'player',
            'start'=> Carbon::createFromDate(2017, 8, 8),
            'end' => Carbon::createFromDate(2020, 1, 1),
            'show_in_web' => true
        ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.7',
            'dimension_on' => 'global',
            'start'=> Carbon::createFromDate(2017, 8, 8),
            'end' => Carbon::createFromDate(2020, 1, 1),
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
