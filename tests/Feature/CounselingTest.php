<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CounselingTest extends TestCase
{


    public function test_counseling_view_can_be_rendered()
    {

        $user=User::factory()->create();

        $response=$this->actingAs($user)->get(route('counseling'));
        $response->assertOk();
        $response->assertViewIs('pages.counseling');
    }
}
