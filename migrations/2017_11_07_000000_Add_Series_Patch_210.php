<?php

use Carbon\Carbon;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeriesPatch210 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('series')
            ->where('name', 'Patch 2.9')
            ->update([
                'end' => new DateTime('2017-11-08 18:00:00')
            ]);

        DB::table('series')
            ->update([
                'currentPatch' => 0
            ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.10',
            'dimension_on' => 'player',
            'start'=> new DateTime('2017-11-08 18:00:00'),
            'end' => Carbon::createFromDate(2020, 1, 1),
            'show_in_web' => true,
            'currentPatch' => 1
        ]);

        DB::table('series')->insert([
            'name' => 'Patch 2.10',
            'dimension_on' => 'global',
            'start'=> new DateTime('2017-11-08 18:00:00'),
            'end' => Carbon::createFromDate(2020, 1, 1),
            'show_in_web' => true,
            'currentPatch' => 1
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
