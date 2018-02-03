<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeagueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vg_league', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug', 10);

            $table->string('name');
            $table->string('tag_line_1')->nullable();
            $table->string('tag_line_2')->nullable();
            $table->enum('status', ['active', 'in-active']);    
            $table->timestampTz('start')->nullable();
            $table->timestampTz('end')->nullable();

            $table->string('logo_url')->nullable();
            $table->string('background_url')->nullable();
            $table->string('theme_name')->nullable();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vg_league');
    }
}
