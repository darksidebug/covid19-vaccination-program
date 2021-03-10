<?php

namespace Tests\Feature;

use App\Models\Person;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CounselingTest extends TestCase
{
    use RefreshDatabase;

    public function test_counseling_user_login_will_redirect_to_counseling_page()
    {
        $user=User::factory()->create([
            'user_type' => 'Counseling',
        ]);

        $response=$this->post(route('check.user'),[
            'username'=>$user->username,
            'password'=>'1234'
        ]);
        $response->assertRedirect(route('counseling'));
    }

    // public function test_counseling_view_can_be_rendered()
    // {
    //     $user=User::factory()->create([
    //         'user_type' => 'Counseling',
    //     ]);

    //     $individuals=Person::factory()->create([
    //         ''
    //     ]);

    //     $response=$this->actingAs($user)->get(route('counseling'));
    //     $response->assertStatus(200);
    //     $response->assertViewIs('pages.counseling');
    //     $response->assertViewHas('forCounselingIndividuals');

    // }




    
}
