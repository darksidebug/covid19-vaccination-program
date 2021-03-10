<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{


    public function test_register_redirect_to_scan_if_session_status_is_none()
    {
        $response=$this->get('/register');
        $response->assertStatus(302);
        $response->assertRedirect('/scan');
    }

    public function test_register_will_render_a_view_if_session_status_has_value()
    {

        $response=$this->withSession([
            'status'=>true,
            'qr_code'=>'01231',
            ])->get('/register');
        $response->assertOk();
        $response->assertViewIs('pages.registration');
        $qrCode=$response['qr_code'];
        $this->assertTrue(!empty($qrCode));
    }



}
