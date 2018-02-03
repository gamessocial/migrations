<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHeals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participant_phases', function (Blueprint $table) {
            $table->double("heal_heal_hero")->nullable();
            $table->double("heal_healed_hero")->nullable();
            $table->double("heal_heal_other")->nullable();
            $table->double("heal_healed_other")->nullable();
            $table->double("heal_rcvd_heal_hero")->nullable();
            $table->double("heal_rcvd_healed_hero")->nullable();
            $table->double("heal_rcvd_heal_other")->nullable();
            $table->double("heal_rcvd_healed_other")->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participant_phases', function (Blueprint $table) {
            $table->dropColumn("heal_heal_hero");
            $table->dropColumn("heal_healed_hero");
            $table->dropColumn("heal_heal_other");
            $table->dropColumn("heal_healed_other");
            $table->dropColumn("heal_rcvd_heal_hero");
            $table->dropColumn("heal_rcvd_healed_hero");
            $table->dropColumn("heal_rcvd_heal_other");
            $table->dropColumn("heal_rcvd_healed_other");
        });

    }
}
