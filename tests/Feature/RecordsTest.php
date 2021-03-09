<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RecordsTest extends TestCase
{
    public function test_date_filter_correct_respond()
    {
        $reponse = $this->post('/vaccination-records',[
            'table-name' => 'User',
            'table-municipality' => 'Sogod',
            'date_filter' => '2020'
        ]);
    }
}
