<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixParticipantItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participant_stats', function (Blueprint $table) {
            $table->string('items')->nullable();                           
            $table->string('item_uses', 455)->nullable();                           
            $table->string('item_grants', 455)->nullable();                           
            $table->string('item_sells', 455)->nullable();                           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
