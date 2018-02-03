<?php

use Carbon\Carbon;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fix5V5Items extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('item')
            ->where('name', 'Scout Cam')
            ->update([
                'is_activable' => '1'
            ]);

        DB::table('item')
            ->where('name', 'Buffed Cam')
            ->update([
                'name' => 'ScoutTuff',
                'is_activable' => '0'
            ]);

        DB::table('item')
            ->where('name', 'Multi-Cam')
            ->update([
                'name' => 'ScoutPak',
                'is_activable' => '0'
            ]);

        DB::table('item')
            ->where('name', 'Boosted Cam')
            ->update([
                'name' => 'SuperScout 2000',
                'is_activable' => '0'
            ]);

        DB::table('item')
            ->where('name', 'Flare Gun beta')
            ->update([
                'name' => 'Flare Loader',
                'is_activable' => '1'
            ]);

        DB::table('item')
            ->where('name', 'Teleport Boots')
            ->update([
                'is_activable' => '1'
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
