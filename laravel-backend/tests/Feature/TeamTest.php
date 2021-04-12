<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Team;

class TeamTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetTeams()
    {
        $response = $this->json('POST', '/api/login', ['name' => 'admin','password' => 'password']);
        $this
        ->withHeader('Authorization', 'Bearer ' . $response['token'])
        ->json('GET', '/api/teams')
        ->assertStatus(200)
        ->assertExactJson(Team::all()->toArray());
    }
}
