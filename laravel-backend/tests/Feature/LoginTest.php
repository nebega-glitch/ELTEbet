<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class LoginTest extends TestCase
{
    public function testLoginWithValidInformation()
    {
        $payload = ['name' => 'admin', 'password' => 'password'];

        $this->json('POST', 'api/login', $payload)
            ->assertStatus(200)
            ->assertJsonStructure([
                'user' => [
                    'id',
                    'name',
                    'created_at',
                    'updated_at',
                ],
                'token'
            ]);
    }

    public function testLoginWithInvalidInformation()
    {
        $payload = ['name' => 'adminka', 'password' => 'password7657'];

        $this->json('POST', 'api/login', $payload)
            ->assertStatus(401)
            ->assertJson(fn (AssertableJson $json) =>$json->where('message', 'Invalid pw or username'));
    }
}
