<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterUserTest extends TestCase
{

    use RefreshDatabase;


    public function test_register_user_using_valid_information_will_return_success_json()
    {

        $response=$this->post('/api/register-user',[
            'firstname' => 'Arman',
            'lastname' => 'Masangkay',
            'username' => 'armanmasangkay',
            'user_type' => 'admin',
            'password' => '1234',
            'confirmPass'=>'1234',
            'municipality' => 'Malitbog'
        ]);

        $response->assertExactJson([
            'status' => 'success'
        ]);

        $this->assertDatabaseHas('users',[
            'firstname' => 'Arman',
            'lastname' => 'Masangkay',
            'username' => 'armanmasangkay',
            'user_type' => 'admin',
            'municipality' => 'Malitbog'
        ]);
    }

    public function test_register_user_with_invalid_data_should_have_validation_errors()
    {
        $response=$this->post('/api/register-user',[
            'firstname' => '',
            'lastname' => '',
            'username' => 'armanmasangkay',
            'user_type' => 'admin',
            'password' => '1234',
            'confirmPass'=>'12345',
            'municipality' => 'Malitbog'
        ]);

        $response->assertJson([
            'status' => 'error',
        ]);

        $errors=$response['errors'];

        $hasValidationError=is_array($errors);
        $this->assertTrue($hasValidationError);

        $this->assertDatabaseCount('users',0);
    }

    public function test_register_user_does_not_match_password()
    {
        $response=$this->post('/api/register-user',[
            'firstname' => 'Arman',
            'lastname' => 'Masangkay',
            'username' => 'armanmasangkay',
            'user_type' => 'admin',
            'password' => '1234',
            'confirmPass'=>'12345',
            'municipality' => 'Malitbog'
        ]);

        $response->assertExactJson([
            'status' => 'error',
            'errors' => 'Password does not match'
        ]);

        $this->assertDatabaseCount('users',0);


    }

}
