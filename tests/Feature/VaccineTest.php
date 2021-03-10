<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VaccineTest extends TestCase
{

    // use RefreshDatabase;

    public function test_check_adding_valid_data_in_vaccine()
    {
        $response = $this->post('/api/vaccine', [
            'batch_number' => '1',
            'lot_number' => '1',
            'vaccine_manufacturer' => 'Pfizer'
            ]);

            $response->assertJson(['status' => 'success']);

            $this->assertDatabaseCount('vaccines',1);
    }


}
