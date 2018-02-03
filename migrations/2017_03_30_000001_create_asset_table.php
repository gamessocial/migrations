<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('api_id')->unique();

            // foreign key
            $table->string('shard_id');
            $table->uuid('match_api_id')->index();

            $table->string('name', 16);
            $table->string('url');
            $table->string('content_type', 32);
            $table->timestamp('created_at');
            $table->string('description');
            $table->string('filename', 32);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset');
    }
}
