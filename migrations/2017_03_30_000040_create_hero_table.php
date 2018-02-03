<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hero', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string("added_in_patch");

            $table->string("name");
            $table->string("api_name");
            $table->boolean("is_assassin");
            $table->boolean("is_mage");
            $table->boolean("is_protector");
            $table->boolean("is_sniper");
            $table->boolean("is_warrior");
            $table->boolean("is_carry");
            $table->boolean("is_jungler");
            $table->boolean("is_captain");

            $table->string("heroic_perk");
            $table->string("ability_a");
            $table->string("ability_b");
            $table->string("ability_c");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hero');
    }
}
