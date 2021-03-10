<?php

namespace Tests\Feature;

use App\Models\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PeopleTest extends TestCase
{
    use RefreshDatabase;
    public function test_can_people_register_qrcode_that_has_unique_qr_code_will_register_successfuly()
    {
        $response = $this->post('/api/register-person', [
            'qr_code' => '07292020-1379',
            'first_name' => 'June Vic',
            'middle_name' => 'Wales',
            'last_name' => 'Cadayona',
            'province' => 'Southern Leyte',
            'municipality' => 'Tomas Oppus',
            'barangay' => 'Bogo (Pob.)',
            'purok' => 'sample',
            'contact' => '09178781045',
            'birth_date' => '2020-2-5',
            'gender' => 'Male',
            'civil_status' => 'Single',
            'category' => 'sadasd',
            'category_id' => 'dsadsa',
            'category_id_number' => 'dsadsa',
            'employment_status' => 'dsadsa',
            'direct_contact' => 'dsadsa',
            'profession' => 'sadsadsa',
            'pregnant_status' => 'False',
            'name_employer' => 'sads',
            'province_employer' => 'dsa',
            'municipality_employer' => 'dsa',
            'barangay_employer' => 'dsa',
            'contact_number_employer' => 'dsa',
            'comorbidity' => 'None',
            'comorbidity_yes' => 'rdsadsad',
            'allergy' => 'none',
            'allergy_yes' => 'dsadsa',
            'diagnose_covid' => 'none',
            'date_diagnose_covid_yes' => '',
            'covid_classification' => '',
            'electronic_informed_consent' => 'None'
        ]);

        $response->assertJson(['status' => 'success']);

        $this->assertDatabaseHas('statuses', ['status' => '1-1']);
        $this->assertDatabaseCount('statuses', 1);
    }

    public function test_can_people_register_qrcode_that_has_not_unique_qr_code_will_fail()
    {

        $person=Person::factory()->create([
            'qr_code'=>'07292020-1379'
        ]);

        $response = $this->post('/api/register-person', [
            'qr_code' => '07292020-1379',
            'first_name' => 'June Vic',
            'middle_name' => 'Wales',
            'last_name' => 'Cadayona',
            'province' => 'Southern Leyte',
            'municipality' => 'Tomas Oppus',
            'barangay' => 'Bogo (Pob.)',
            'purok' => 'sample',
            'contact' => '09178781045',
            'birth_date' => '2020-2-5',
            'gender' => 'Male',
            'civil_status' => 'Single',
            'category' => 'sadasd',
            'category_id' => 'dsadsa',
            'category_id_number' => 'dsadsa',
            'employment_status' => 'dsadsa',
            'direct_contact' => 'dsadsa',
            'profession' => 'sadsadsa',
            'pregnant_status' => 'False',
            'name_employer' => 'sads',
            'province_employer' => 'dsa',
            'municipality_employer' => 'dsa',
            'barangay_employer' => 'dsa',
            'contact_number_employer' => 'dsa',
            'comorbidity' => 'None',
            'comorbidity_yes' => 'rdsadsad',
            'allergy' => 'none',
            'allergy_yes' => 'dsadsa',
            'diagnose_covid' => 'none',
            'date_diagnose_covid_yes' => '',
            'covid_classification' => '',
            'electronic_informed_consent' => 'None'
        ]);

        $response->assertJson(['status' => 'error']);
    }
}
