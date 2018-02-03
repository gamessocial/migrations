<?php

use Carbon\Carbon;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5V5Items extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('item')->insert([
            'api_id' => '*Item_VisionTotem*',
            'series' => '0',
            'name' => 'Scout Cam',
            'is_activable' => '0'
        ]);

        DB::table('item')->insert([
            'api_id' => '*Item_TotemMultiplier*',
            'series' => '0',
            'name' => 'Multi-Cam',
            'is_activable' => '0'
        ]);

        DB::table('item')->insert([
            'api_id' => '*Item_TotemEnhancer*',
            'series' => '0',
            'name' => 'Boosted Cam',
            'is_activable' => '0'
        ]);

        DB::table('item')->insert([
            'api_id' => '*Item_TotemBuffer*',
            'series' => '0',
            'name' => 'Buffed Cam',
            'is_activable' => '0'
        ]);

        DB::table('item')->insert([
            'api_id' => '*Item_FlareGun_Beta*',
            'series' => '0',
            'name' => 'Flare Gun beta',
            'is_activable' => '0'
        ]);

        DB::table('item')->insert([
            'api_id' => '*Item_WarpGenerator*',
            'series' => '0',
            'name' => 'Teleport Boots',
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
