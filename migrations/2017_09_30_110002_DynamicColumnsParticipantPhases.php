<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DynamicColumnsParticipantPhases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participant_phases', function (Blueprint $table) {
            $table->dropColumn('items');
            $table->dropColumn('item_grants');
            $table->dropColumn('item_sells');
            $table->dropColumn('ability_levels');
            $table->dropColumn('ability_uses');
            $table->dropColumn('ability_damage');
            $table->dropColumn('item_uses');
            $table->dropColumn('player_damage');
        });
    }

    public function down()
    {
        Schema::table('participant_phases', function (Blueprint $table) {
            $table->string('items')->nullable();
            $table->string('item_grants')->nullable();
            $table->string('item_sells')->nullable();
            $table->string('ability_levels')->nullable();
            $table->string('ability_uses')->nullable();
            $table->string('ability_damage')->nullable();
            $table->string('item_uses')->nullable();
            $table->string('player_damage')->nullable();
        });
    }
}
