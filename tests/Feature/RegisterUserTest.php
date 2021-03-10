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
            'user_type' => 'Admin',
            'password' => '1234',
            'confirmPass'=>'1234',
            'municipality' => 'Malitbog',
            'name_of_facility' => 'N/A',
            'prc_license_number' => 'N/A',
            'user_position'=>'N/A',
            'role'=>'nurse'
        ]);

        $response->assertExactJson([
            'status' => 'success'
        ]);

        $this->assertDatabaseHas('users',[
            'firstname' => 'Arman',
            'lastname' => 'Masangkay',
            'username' => 'armanmasangkay',
            'user_type' => 'Admin',
            'municipality' => 'Malitbog'
        ]);
    }

    public function test_register_user_with_invalid_data_should_have_validation_errors()
    {
        $response=$this->post('/api/register-user',[
            'firstname' => '',
            'lastname' => '',
            'username' => 'armanmasangkay',
            'user_type' => 'Admin',
            'password' => '1234',
            'confirmPass'=>'12345',
            'municipality' => 'Malitbog',
            'name_of_facility' => 'N/A',
            'prc_license_number' => 'N/A',
            'role'=>'nurse'
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
            'user_type' => 'Admin',
            'password' => '1234',
            'confirmPass'=>'12345',
            'municipality' => 'Malitbog',
            'name_of_facility' => 'N/A',
            'prc_license_number' => 'N/A',
            'role'=>'nurse'
        ]);

        $response->assertExactJson([
            'status' => 'error',
            'errors' => 'Password does not match'
        ]);

        $this->assertDatabaseCount('users',0);
    }


    public function test_register_user_using_invalid_user_type_returns_an_json_error()
    {
        $response=$this->post('/api/register-user',[
            'firstname' => 'Arman',
            'lastname' => 'Masangkay',
            'username' => 'armanmasangkay',
            'user_type' => 'you12312312',
            'password' => '1234',
            'confirmPass'=>'12345',
            'municipality' => 'Malitbog',
            'name_of_facility' => 'N/A',
            'prc_license_number' => 'N/A',
            'role'=>'nurse'
        ]);

        $response->assertExactJson([
            'status' => 'error',
            'errors' => 'Invalid user type'
        ]);

        $this->assertDatabaseCount('users',0);
    }

}
