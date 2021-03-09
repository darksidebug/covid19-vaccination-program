<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    public function test_logout_should_unauthenticate_user()
    {

        $user=User::factory()->create();

       $response= $this->actingAs($user)->get('/logout');

        $response->assertRedirect(route('login'));

        $this->assertGuest();
    }
}
