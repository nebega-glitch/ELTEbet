<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;
use App\Models\User;

class RegisterTest extends TestCase
{
    public function testRegistrationWithValidFields()
    {
        $payload = ['name' => 'kortefa', 'password' => 'password'];

        $this->json('POST', 'api/register', $payload)->assertStatus(201);
    }

    public function testRegistrationWithMissingField()
    {
        $payload = ['name' => 'bokretafa'];

        $this->json('POST', 'api/register', $payload)->assertStatus(422);
    }

    public function testCheckDuplicateUsername()
    {
        $payload = ['name' => 'kortefa', 'password' => 'password'];

        $this->json('POST', 'api/register', $payload)->assertStatus(500);
    }
}