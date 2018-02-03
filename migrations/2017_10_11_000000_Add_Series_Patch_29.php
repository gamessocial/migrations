<?php

use Carbon\Carbon;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeriesPatch29 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('series')
            ->where('name', 'Patch 2.8')
            ->update([
                'end' => Carbon::createFromDate(2017, 10, 11)
            ]);

        DB::table('series')
            ->update([
                'currentPatch' => 0
            ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.9',
            'dimension_on' => 'player',
            'start'=> Carbon::createFromDate(2017, 10, 11),
            'end' => Carbon::createFromDate(2020, 1, 1),
            'show_in_web' => true,
            'currentPatch' => 1
        ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.9',
            'dimension_on' => 'global',
            'start'=> Carbon::createFromDate(2017, 10, 11),
            'end' => Carbon::createFromDate(2020, 1, 1),
            'show_in_web' => true,
            'currentPatch' => 1
        ]);

        DB::table('item')->insert([
            'api_id' => '*Item_DragonsEye*',
            'series' => '0',
            'name' => 'Dragon\'s Eye',
            'is_activable' => '0'
        ]);

        DB::table('item')->insert([
            'api_id' => '*Item_Spellfire*',
            'series' => '0',
            'name' => 'Spellfire',
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
