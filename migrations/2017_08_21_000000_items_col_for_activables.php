<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemsColForActivables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('item', function (Blueprint $table) {
            $table->boolean("is_activable")->nullable();

            $table->dropColumn("active");
            $table->dropColumn("passive");
        });


        DB::table('item')
            ->where('name', 'Aegis')
            ->update([
                'is_activable' => true
            ]);

        DB::table('item')
            ->where('name', 'Atlas Pauldron')
            ->update([
                'is_activable' => true
            ]);

        DB::table('item')
            ->where('name', 'Contraption')
            ->update([
                'is_activable' => true
            ]);

        DB::table('item')
            ->where('name', 'Crucible')
            ->update([
                'is_activable' => true
            ]);

        DB::table('item')
            ->where('name', 'Dragonblood Contract')
            ->update([
                'is_activable' => true
            ]);

        DB::table('item')
            ->where('name', 'Echo')
            ->update([
                'is_activable' => true
            ]);

        DB::table('item')
            ->where('name', 'Flare')
            ->update([
                'is_activable' => true
            ]);

        DB::table('item')
            ->where('name', 'Flare Gun')
            ->update([
                'is_activable' => true
            ]);

        DB::table('item')
            ->where('name', 'Fountain of Renewal')
            ->update([
                'is_activable' => true
            ]);

        DB::table('item')
            ->where('name', 'Halcyon Chargers')
            ->update([
                'is_activable' => true
            ]);

        DB::table('item')
            ->where('name', 'Halcyon Potion')
            ->update([
                'is_activable' => true
            ]);

        DB::table('item')
            ->where('name', 'Journey Boots')
            ->update([
                'is_activable' => true
            ]);
        DB::table('item')
            ->where('name', 'Minion Candy')
            ->update([
                'is_activable' => true
            ]);
        DB::table('item')
            ->where('name', 'Nullwave Gauntlet')
            ->update([
                'is_activable' => true
            ]);
        DB::table('item')
            ->where('name', 'Protector Contract')
            ->update([
                'is_activable' => true
            ]);
        DB::table('item')
            ->where('name', 'Reflex Block')
            ->update([
                'is_activable' => true
            ]);
        DB::table('item')
            ->where('name', 'Scout Trap')
            ->update([
                'is_activable' => true
            ]);
        DB::table('item')
            ->where('name', 'Shiversteel')
            ->update([
                'is_activable' => true
            ]);
        DB::table('item')
            ->where('name', 'Sprint Boots')
            ->update([
                'is_activable' => true
            ]);
        DB::table('item')
            ->where('name', 'Travel Boots')
            ->update([
                'is_activable' => true
            ]);
        DB::table('item')
            ->where('name', 'War Treads')
            ->update([
                'is_activable' => true
            ]);
        DB::table('item')
            ->where('name', 'Weapon Infusion')
            ->update([
                'is_activable' => true
            ]);
        DB::table('item')
            ->where('name', 'Crystal Infusion')
            ->update([
                'is_activable' => true
            ]);
        DB::table('item')
            ->where('name', 'Kissy')
            ->update([
                'is_activable' => true
            ]);
        DB::table('item')
            ->where('name', 'Taunt')
            ->update([
                'is_activable' => true
            ]);
        DB::table('item')
            ->where('name', 'Voice over Taunt')
            ->update([
                'is_activable' => true
            ]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item', function (Blueprint $table) {
            $table->dropColumn("is_activable");

            $table->string('active', 191)->nullable();
            $table->string('passive', 191)->nullable();
        });

    }
}
