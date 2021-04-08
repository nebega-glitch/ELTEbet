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
            'Group' => 'C',
            'created_at'=>now()
        ]);
        DB::table('teams')->insert([
            'Name' => 'Belgium',
            'Picture' => Storage::url('flags/Belgium.png'),
            'Group' => 'B',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Horvátország',
            'Picture' => Storage::url('flags/Croatia.png'),
            'Group' => 'D',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Csehország',
            'Picture' => Storage::url('flags/Czech.png'),
            'Group' => 'D',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Dánia',
            'Picture' => Storage::url('flags/Denmark.png'),
            'Group' => 'B',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Anglia',
            'Picture' => Storage::url('flags/England.png'),
            'Group' => 'D',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Finnország',
            'Picture' => Storage::url('flags/Finland.png'),
            'Group' => 'B',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Franciaország',
            'Picture' => Storage::url('flags/France.png'),
            'Group' => 'F',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Németország',
            'Picture' => Storage::url('flags/Germany.png'),
            'Group' => 'F',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Magyarország',
            'Picture' => Storage::url('flags/Hungary.png'),
            'Group' => 'F',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Olaszország',
            'Picture' => Storage::url('flags/Italy.png'),
            'Group' => 'A',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Észak-Macedónia',
            'Picture' => Storage::url('flags/Macedonia.png'),
            'Group' => 'C',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Hollandia',
            'Picture' => Storage::url('flags/Netherlands.png'),
            'Group' => 'C',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Lengyelország',
            'Picture' => Storage::url('flags/Poland.png'),
            'Group' => 'E',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Portugália',
            'Picture' => Storage::url('flags/Portugal.png'),
            'Group' => 'F',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Oroszország',
            'Picture' => Storage::url('flags/Russian.png'),
            'Group' => 'B',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Skócia',
            'Picture' => Storage::url('flags/Scotland.png'),
            'Group' => 'D',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Szlovákia',
            'Picture' => Storage::url('flags/Slovakia.png'),
            'Group' => 'E',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Spanyolország',
            'Picture' => Storage::url('flags/Spain.png'),
            'Group' => 'E',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Svédország',
            'Picture' => Storage::url('flags/Sweden.png'),
            'Group' => 'E',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Svájc',
            'Picture' => Storage::url('flags/Switzerland.png'),
            'Group' => 'A',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Törökország',
            'Picture' => Storage::url('flags/Turkey.png'),
            'Group' => 'A',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Ukrajna',
            'Picture' => Storage::url('flags/Ukraine.png'),
            'Group' => 'C',
            'created_at'=>now() 
        ]);
        DB::table('teams')->insert([
            'Name' => 'Wales',
            'Picture' => Storage::url('flags/Wales.png'),
            'Group' => 'A',
            'created_at'=>now() 
        ]);

        DB::table('fixtures')->insert([
            'Start' => date('2021-06-11 21:00:00'),
            'Team1Id' =>22,
            'Team2Id' =>11,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-12 15:00:00'),
            'Team1Id' =>24,
            'Team2Id' =>21,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-16 18:00:00'),
            'Team1Id' =>22,
            'Team2Id' =>24,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-16 18:00:00'),
            'Team1Id' =>11,
            'Team2Id' =>21,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-20 18:00:00'),
            'Team1Id' =>21,
            'Team2Id' =>22,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-20 18:00:00'),
            'Team1Id' =>11,
            'Team2Id' =>24,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-12 18:00:00'),
            'Team1Id' =>5,
            'Team2Id' =>7,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-12 21:00:00'),
            'Team1Id' =>2,
            'Team2Id' =>16,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-16 15:00:00'),
            'Team1Id' =>7,
            'Team2Id' =>16,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-17 18:00:00'),
            'Team1Id' =>5,
            'Team2Id' =>2,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-21 21:00:00'),
            'Team1Id' =>16,
            'Team2Id' =>5,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-21 21:00:00'),
            'Team1Id' =>6,
            'Team2Id' =>2,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);

        DB::table('fixtures')->insert([
            'Start' => date('2021-06-13 18:00:00'),
            'Team1Id' =>1,
            'Team2Id' =>12,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-13 21:00:00'),
            'Team1Id' =>13,
            'Team2Id' =>23,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-17 15:00:00'),
            'Team1Id' =>23,
            'Team2Id' =>12,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-17 21:00:00'),
            'Team1Id' =>13,
            'Team2Id' =>1,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-21 18:00:00'),
            'Team1Id' =>12,
            'Team2Id' =>13,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-21 18:00:00'),
            'Team1Id' =>23,
            'Team2Id' =>1,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);

        DB::table('fixtures')->insert([
            'Start' => date('2021-06-13 15:00:00'),
            'Team1Id' =>6,
            'Team2Id' =>3,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-14 15:00:00'),
            'Team1Id' =>17,
            'Team2Id' =>4,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-18 18:00:00'),
            'Team1Id' =>3,
            'Team2Id' =>4,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-18 21:00:00'),
            'Team1Id' =>6,
            'Team2Id' =>17,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-22 21:00:00'),
            'Team1Id' =>3,
            'Team2Id' =>17,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-22 21:00:00'),
            'Team1Id' =>4,
            'Team2Id' =>6,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);

        DB::table('fixtures')->insert([
            'Start' => date('2021-06-14 18:00:00'),
            'Team1Id' =>14,
            'Team2Id' =>18,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-14 21:00:00'),
            'Team1Id' =>19,
            'Team2Id' =>20,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-18 15:00:00'),
            'Team1Id' =>20,
            'Team2Id' =>18,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-19 21:00:00'),
            'Team1Id' =>19,
            'Team2Id' =>14,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-23 18:00:00'),
            'Team1Id' =>18,
            'Team2Id' =>19,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-23 18:00:00'),
            'Team1Id' =>20,
            'Team2Id' =>14,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);

        DB::table('fixtures')->insert([
            'Start' => date('2021-06-15 18:00:00'),
            'Team1Id' =>10,
            'Team2Id' =>15,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-15 21:00:00'),
            'Team1Id' =>8,
            'Team2Id' =>9,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-19 15:00:00'),
            'Team1Id' =>10,
            'Team2Id' =>8,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-19 18:00:00'),
            'Team1Id' =>15,
            'Team2Id' =>9,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-23 21:00:00'),
            'Team1Id' =>15,
            'Team2Id' =>8,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
        DB::table('fixtures')->insert([
            'Start' => date('2021-06-23 21:00:00'),
            'Team1Id' =>9,
            'Team2Id' =>10,
            'Team1Score' =>NULL,
            'Team2Score' =>NULL,
            'Result'=>NULL,
            'created_at'=>now()
        ]);
    }
}
