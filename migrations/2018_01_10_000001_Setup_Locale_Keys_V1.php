<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupLocaleKeysV1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $keys = [
            [   'key'       => 'draft.title',
                'version'   => 'v1.0.0',
                'en'        => 'Vainglory Double Ban Draft' ],
            [   'key'       => 'draft.og.description',
                'version'   => 'v1.0.0',
                'en'        => 'Vainglory Double Ban Drafting, Statistics, Meta' ],
            [   'key'       => 'draft.team.a',
                'version'   => 'v1.0.0',
                'en'        => 'Team A' ],
            [   'key'       => 'draft.team.b',
                'version'   => 'v1.0.0',
                'en'        => 'Team B' ],
            [   'key'       => 'draft.cta.init',
                'version'   => 'v1.0.0',
                'en'        => 'Initialize' ],
            [   'key'       => 'draft.step.init',
                'version'   => 'v1.0.0',
                'en'        => 'Initialize' ],
            [   'key'       => 'draft.step.share',
                'version'   => 'v1.0.0',
                'en'        => 'Share' ],
            [   'key'       => 'draft.step.start',
                'version'   => 'v1.0.0',
                'en'        => 'Start' ],
            [   'key'       => 'draft.step.started',
                'version'   => 'v1.0.0',
                'en'        => 'In Progress' ],
            [   'key'       => 'draft.step.ended',
                'version'   => 'v1.0.0',
                'en'        => 'Ended' ],
            [   'key'       => 'draft.share.link',
                'version'   => 'v1.0.0',
                'en'        => 'Copy and Share the link with team' ],


            [   'key'       => 'home.title',
                'version'   => 'v1.0.0',
                'en'        => 'VainSocial: Player Profile and Preferences' ],
            [   'key'       => 'home.og.description',
                'version'   => 'v1.0.0',
                'en'        => 'Player Profile and Preferences'],
            [   'key'       => 'home.widget.team.header',
                'version'   => 'v1.0.0',
                'en'        => 'Your Teams' ],
            [   'key'       => 'home.widget.create-team.header',
                'version'   => 'v1.0.0',
                'en'        => 'Create a new Team' ],
            [   'key'       => 'team.create.error.slug-in-use',
                'version'   => 'v1.0.0',
                'en'        => 'Slug has already been taken.' ],
            [   'key'       => 'team.create.success',
                'version'   => 'v1.0.0',
                'en'        => 'Team has been created Successfully.' ],
            [   'key'       => 'home.widget.league.header',
                'version'   => 'v1.0.0',
                'en'        => 'Your Leagues' ],

            [   'key'       => 'team.membership.captain',
                'version'   => 'v1.0.0',
                'en'        => 'Captain' ],
            [   'key'       => 'team.label.name',
                'version'   => 'v1.0.0',
                'en'        => 'Name' ],
            [   'key'       => 'team.label.slug',
                'version'   => 'v1.0.0',
                'en'        => 'Slug' ],
            [   'key'       => 'team.label.region',
                'version'   => 'v1.0.0',
                'en'        => 'Region' ],

            [   'key'       => 'common.cta.clear',
                'version'   => 'v1.0.0',
                'en'        => 'Clear' ],
            [   'key'       => 'common.cta.submit',
                'version'   => 'v1.0.0',
                'en'        => 'Submit' ],
            [   'key'       => 'common.cta.join',
                'version'   => 'v1.0.0',
                'en'        => 'Join' ],
            [   'key'       => 'common.cta.copy',
                'version'   => 'v1.0.0',
                'en'        => 'Copy' ],
            [   'key'       => 'common.label.team',
                'version'   => 'v1.0.0',
                'en'        => 'Team' ],
            [   'key'       => 'common.label.joined',
                'version'   => 'v1.0.0',
                'en'        => 'Joined' ],


            [   'key'       => 'region.chn',
                'version'   => 'v1.0.0',
                'en'        => 'China' ],
            [   'key'       => 'region.na',
                'version'   => 'v1.0.0',
                'en'        => 'NA' ],
            [   'key'       => 'region.eu',
                'version'   => 'v1.0.0',
                'en'        => 'EU' ],
            [   'key'       => 'region.ea',
                'version'   => 'v1.0.0',
                'en'        => 'EA' ],
            [   'key'       => 'region.sa',
                'version'   => 'v1.0.0',
                'en'        => 'SA' ],
            [   'key'       => 'region.sg',
                'version'   => 'v1.0.0',
                'en'        => 'SEA' ],
        ];


        DB::connection()->table('vg_localization')->insert($keys);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::connection()->table('vg_localization')->where('version', '=', 'v1.0.0')->delete();
    }
}
