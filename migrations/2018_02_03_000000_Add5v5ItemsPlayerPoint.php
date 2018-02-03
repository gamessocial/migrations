<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5v5ItemsPlayerPoint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('player_point', function (Blueprint $table) {
            $table->unsignedBigInteger('item_076_use');  // Scout Cam
            $table->unsignedBigInteger('item_080_use');  // Flare Loader
            $table->unsignedBigInteger('item_081_use');  // Teleport Boots
        });
    }
    
    public function down()
    {
        Schema::table('player_point', function (Blueprint $table) {
            $table->dropColumn('item_076_use');  // Scout Cam
            $table->dropColumn('item_080_use');  // Flare Loader
            $table->dropColumn('item_081_use');  // Teleport Boots
        });

    }
}
