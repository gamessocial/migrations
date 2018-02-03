<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateIndexOnGlobalPointPhaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('global_point_phase', function (Blueprint $table) {
            $table->dropIndex('global_point_phase_in_space');

            $table->unique(['series_id', 'filter_id', 'hero_id', 'game_mode_id', 'skill_tier_id', 'build_id', 'role_id', 'region_id', 'phase_start', 'phase_end'], 'global_point_phase_in_space');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('global_point_phase', function (Blueprint $table) {
            $table->dropIndex('global_point_phase_in_space');

            $table->unique(['series_id', 'filter_id', 'hero_id', 'game_mode_id', 'skill_tier_id', 'build_id', 'role_id', 'region_id'], 'global_point_phase_in_space_index');
        });
    }
}
