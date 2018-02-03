<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexOnDimensions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('filter', function (Blueprint $table) {
            $table->unique(['dimension_on', 'name']);
        });
        Schema::table('series', function (Blueprint $table) {
            $table->index(['name', 'dimension_on', 'show_in_web', 'start', 'end']);
        });
        Schema::table('hero', function (Blueprint $table) {
            $table->unique('name');
        });
        Schema::table('role', function (Blueprint $table) {
            $table->unique('name');
        });
        Schema::table('region', function (Blueprint $table) {
            $table->unique('name');
        });
        Schema::table('skill_tier', function (Blueprint $table) {
            $table->unique(['name', 'start', 'end']);
        });
        Schema::table('build', function (Blueprint $table) {
            $table->index([
                'dimension_on', 'name',
                'item_1', 'item_1_count',
                'item_2', 'item_2_count',
                'item_3', 'item_3_count',
                'item_4', 'item_4_count',
                'item_5', 'item_5_count',
                'item_6', 'item_6_count'
            ], 'dim_name_items_counts');
        });
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
