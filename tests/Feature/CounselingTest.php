<?php

namespace Tests\Feature;

use App\Models\Person;
use App\Models\Status;
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

    public function test_counseling_view_can_be_rendered_with_all_registered_first_dose_persons()
    {
        $user=User::factory()->create([
            'user_type' => 'Counseling',
        ]);
        $person=Person::factory()->create();

        $status=Status::create([
            'people_id'=>$person->id,
            'status'=>'1-1'
        ]);

        $person2=Person::factory()->create();

        $status2=Status::create([
            'people_id'=>$person2->id,
            'status'=>'1-1'
        ]);

        $personsForCounseling=[$status->person,$status2->person];

       
        $response=$this->actingAs($user)->get(route('counseling'));
        $response->assertStatus(200);
        $response->assertViewIs('pages.counseling');
        $response->assertViewHas('for_counseling',$personsForCounseling);

    }

    public function test_counseling_view_can_be_rendered_with_all_registered_second_dose_persons()
    {
        $user=User::factory()->create([
            'user_type' => 'Counseling',
        ]);
        $person=Person::factory()->create();

        $status=Status::create([
            'people_id'=>$person->id,
            'status'=>'1-2'
        ]);

        $person2=Person::factory()->create();

        $status2=Status::create([
            'people_id'=>$person2->id,
            'status'=>'1-2'
        ]);

        $personsForCounseling=[$status->person,$status2->person];

        $response=$this->actingAs($user)->get(route('counseling'));
        $response->assertStatus(200);
        $response->assertViewIs('pages.counseling');
        $response->assertViewHas('for_counseling',$personsForCounseling);

    }

    public function test_counseling_sheet_should_not_be_rendered_without_id()
    {
        $user=User::factory()->create([
            'user_type' => 'Counseling',
        ]);
        $person=Person::factory()->create();

        $status=Status::create([
            'people_id'=>$person->id,
            'status'=>'1-1'
        ]);

        $response=$this->actingAs($user)->get(route('counseling.sheet'));

        $response->assertStatus(403);

    }

    public function test_counseling_sheet_can_be_rendered()
    {
        $user=User::factory()->create([
            'user_type' => 'Counseling',
        ]);

        $person=Person::factory()->create();

        $status=Status::create([
            'people_id'=>$person->id,
            'status'=>'1-1'
        ]);

        $response=$this->actingAs($user)->get(route('counseling.sheet',[
            'id'=>$person->id
        ]));

        $response->assertViewIs('pages.counseling-sheet');
        $response->assertViewHas('person_id',$person->id);
        $response->assertViewHas('dose',1);
        $response->assertOk();

    }

    public function test_save_counseling_sheet_data_for_agreeing_consent()
    {
        $user=User::factory()->create([
            'user_type' => 'Counseling',
        ]);

        $person=Person::factory()->create();

        Status::create([
            'people_id'=>$person->id,
            'status'=>'1-1'
        ]);
        $response=$this->actingAs($user)->post(route('counseling.sheet'),[
            'person_id'=>$person->id,
            'consent'=>"on",
            'reason'=>'',
            'dose'=>1
        ]);
        $response->assertViewIs('pages.counseling-sheet-success');
        $this->assertDatabaseHas('consents',[
            'person_id'=>$person->id,
            'consent'=>1,
            'reason'=>null,
            'dose'=>1,
        ]);

        $this->assertDatabaseHas('statuses',[
            'people_id'=>$person->id,
            'status'=>'2-1',
        ]);

        $this->assertDatabaseHas('counselled_locations',[
            'person_id'=>$person->id,
            'municipality'=>$user->municipality,
            'facility'=>$user->name_of_facility,
        ]);

    }






    
}
