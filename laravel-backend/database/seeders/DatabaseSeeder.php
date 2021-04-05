<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Team;
use App\Models\Fixture;  
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "admin",
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);

        DB::table('users')->insert([
            'name' => "bence",
            'password' => bcrypt('password'),
            'is_admin' => false,
        ]);

        DB::table('teams')->insert([
            'Name' => 'Ausztria',
            'Picture' => Storage::url('flags/Austria.png'),
            'Group' => 'C'
        ]);
        DB::table('teams')->insert([
            'Name' => 'Belgium',
            'Picture' => Storage::url('flags/Belgium.png'),
            'Group' => 'B' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Horvátország',
            'Picture' => Storage::url('flags/Croatia.png'),
            'Group' => 'D' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Csehország',
            'Picture' => Storage::url('flags/Czech.png'),
            'Group' => 'D' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Dánia',
            'Picture' => Storage::url('flags/Denmark.png'),
            'Group' => 'B' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Anglia',
            'Picture' => Storage::url('flags/England.png'),
            'Group' => 'D' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Finnország',
            'Picture' => Storage::url('flags/Finland.png'),
            'Group' => 'B' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Franciaország',
            'Picture' => Storage::url('flags/France.png'),
            'Group' => 'F' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Németország',
            'Picture' => Storage::url('flags/Germany.png'),
            'Group' => 'F' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Magyarország',
            'Picture' => Storage::url('flags/Hungary.png'),
            'Group' => 'F' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Olaszország',
            'Picture' => Storage::url('flags/Italy.png'),
            'Group' => 'A' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Észak-Macedónia',
            'Picture' => Storage::url('flags/Macedonia.png'),
            'Group' => 'C' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Hollandia',
            'Picture' => Storage::url('flags/Netherlands.png'),
            'Group' => 'C' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Lengyelország',
            'Picture' => Storage::url('flags/Poland.png'),
            'Group' => 'E' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Portugália',
            'Picture' => Storage::url('flags/Portugal.png'),
            'Group' => 'F' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Oroszország',
            'Picture' => Storage::url('flags/Russian.png'),
            'Group' => 'B' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Skócia',
            'Picture' => Storage::url('flags/Scotland.png'),
            'Group' => 'D' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Szlovákia',
            'Picture' => Storage::url('flags/Slovakia.png'),
            'Group' => 'E' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Spanyolország',
            'Picture' => Storage::url('flags/Spain.png'),
            'Group' => 'E' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Svédország',
            'Picture' => Storage::url('flags/Sweden.png'),
            'Group' => 'E' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Svájc',
            'Picture' => Storage::url('flags/Switzerland.png'),
            'Group' => 'A' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Törökország',
            'Picture' => Storage::url('flags/Turkey.png'),
            'Group' => 'A' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Ukrajna',
            'Picture' => Storage::url('flags/Ukraine.png'),
            'Group' => 'C' 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Wales',
            'Picture' => Storage::url('flags/Wales.png'),
            'Group' => 'A' 
        ]);

        DB::table('fixtures')->insert([
            'Start' => date('2021-07-08 12:00:00'),
            'Team1Id' =>3,
            'Team2Id' =>2,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-07-08 12:00:00'),
            'Team1Id' =>7,
            'Team2Id' =>6,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-07-09 12:00:00'),
            'Team1Id' =>1,
            'Team2Id' =>3,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
    }
}
