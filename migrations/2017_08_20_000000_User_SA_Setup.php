<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserSASetup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('access_type');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->enum('access_type', ['free', 'loyal', 'plus', 'premium', 'admin', 'super_admin']);
        });

        Schema::table('tournament', function (Blueprint $table) {
            $table->string('owner', 191)->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('access_type');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->enum('access_type', ['free', 'loyal', 'plus', 'premium']);
        });

        Schema::table('tournament', function (Blueprint $table) {
            $table->dropColumn('owner');
        });

    }
}
