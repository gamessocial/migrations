 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedLeagueTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $leagues = [
             [   
                'slug'          => 'nacl',
                'name'          => 'NACL',
                'status'        => 'Active',
                'logo_url'      => '/images/leagues/nacl/logo.png'
            ],
        ];

        $seasons = [
             [   
                'slug'          => 'season-5',
                'name'          => 'Season 5',
                'status'        => 'planned',
                'league_id'     => '1',
            ],
        ];

        $league_users = [
             [   
                'user_id'              => 1,
                'vg_league_id'         => 1,
                'membership'           => 'admin',
            ],
        ];

        $teams = [
             [   
                'slug'              => 'vain',
                'name'              => 'Best API Devs',
                'shard_id'          => '',
                'status'            => 'Active',
                'type'              => 'Team',
            ],
        ];

        $team_users = [
             [   
                'user_id'              => 1,
                'vg_team_id'           => 1,
                'membership'           => 'captain',
            ],
        ];

        DB::connection()->table('vg_league')->insert($leagues);
        DB::connection()->table('vg_season')->insert($seasons);
        DB::connection()->table('vg_league_user')->insert($league_users);

        DB::connection()->table('vg_team')->insert($teams);
        DB::connection()->table('vg_team_user')->insert($team_users);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::connection()->table('vg_league')->delete();
        DB::connection()->table('vg_season')->delete();
        DB::connection()->table('vg_team_user')->delete();

        DB::connection()->table('vg_team')->delete();
        DB::connection()->table('vg_team_user')->delete();
    }
}
