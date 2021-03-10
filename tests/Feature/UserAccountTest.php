<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserAccountTest extends TestCase
{
    use RefreshDatabase;

    public function test_register_user_account()
    {
        $response = $this->post('/api/register-user',[
            'name_of_facility' => 'N/A',
            'prc_license_number' => 'N/A',
            'firstname' => 'admin',
            'lastname' => 'admin',
            'username' => 'admin',
            'user_type' => 'Admin',
            'password' => 'southernleyte',
            'confirmPass' => 'southernleyte',
            'municipality' => 'Malitbog',
            'user_position' => 'Doctor',
            'role'=>'nurse'
        ]);



        $response->assertJson(['status' => 'success']);

        // $response->assertDatabaseCount('users', 0);
    }

  
}
