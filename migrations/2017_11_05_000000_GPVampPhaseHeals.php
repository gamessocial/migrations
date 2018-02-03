<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GPVampPhaseHeals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('global_point_phase', function (Blueprint $table) {
            $table->double("heal_heal_ally")->after("heal_healed_hero")->nullable();
            $table->double("heal_healed_ally")->after("heal_heal_ally")->nullable();
            $table->double("heal_rcvd_heal_ally")->after("heal_rcvd_healed_hero")->nullable();
            $table->double("heal_rcvd_healed_ally")->after("heal_rcvd_heal_ally")->nullable();
            $table->double("heal_rcvd_healed_vamp")->after("heal_rcvd_healed_hero")->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('global_point_phase', function (Blueprint $table) {
            $table->dropColumn("heal_heal_ally");
            $table->dropColumn("heal_healed_ally");
            $table->dropColumn("heal_rcvd_heal_ally");
            $table->dropColumn("heal_rcvd_healed_ally");
            $table->dropColumn("heal_rcvd_healed_vamp");
        });

    }
}
