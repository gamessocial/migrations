<?php

use Carbon\Carbon;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeriesPatch28 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('series')
            ->where('name', 'Patch 2.7')
            ->update([
                'end' => Carbon::createFromDate(2017, 9, 6)
            ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.8',
            'dimension_on' => 'player',
            'start'=> Carbon::createFromDate(2017, 9, 6),
            'end' => Carbon::createFromDate(2020, 1, 1),
            'show_in_web' => true
        ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.8',
            'dimension_on' => 'global',
            'start'=> Carbon::createFromDate(2017, 9, 6),
            'end' => Carbon::createFromDate(2020, 1, 1),
            'show_in_web' => true
        ]);

        DB::table('item')->insert([
            'api_id' => '*Item_HealingFlask*',
            'series' => ' ',
            'name' => 'Healing Flask',
            'is_activable' => '1'
        ]);

        DB::table('item')->insert([
            'api_id' => '*Item_Spellsword*',
            'series' => ' ',
            'name' => 'Spellsword',
            'is_activable' => '0'
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
