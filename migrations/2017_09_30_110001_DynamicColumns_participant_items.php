<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DynamicColumnsParticipantItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participant_items', function (Blueprint $table) {
            $table->increments('id');

            $table->string('shard_id');
            $table->uuid('participant_api_id')->unique();

            $table->binary('items');
            $table->binary('item_grants');
            $table->binary('item_uses');
            $table->binary('item_sells');
            $table->boolean('surrender');
        });
    }

    public function down()
    {
        Schema::dropIfExists('participant_items');
    }
}
