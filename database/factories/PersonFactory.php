<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'qr_code'=>Str::random(20),
        'first_name'=>$this->faker->firstName,
        'middle_name'=>$this->faker->lastName,
        'last_name'=>$this->faker->lastName,
        'suffix_name'=>'',
        'province'=>$this->faker->streetAddress,
        'municipality'=>'Sogod',
        'barangay'=>$this->faker->streetAddress,
        'purok'=>'Purok 1',
        'contact'=>'09757375747',
        'birth_date'=>$this->faker->date(),
        'gender'=>'male',
        'civil_status'=>'Single',
        'category'=>'Health Care',
        'category_id'=>Str::random(20),
        'category_id_number'=>Str::random(20),
        'employment_status'=>Str::random(20),
        'philhealth_id_number'=>Str::random(20),
        'pwd_id_number'=>Str::random(20),
        'direct_contact'=>Str::random(20),
        'profession'=>Str::random(20),
        'name_employer'=>Str::random(20),
        'province_employer'=>Str::random(20),
        'municipality_employer'=>Str::random(20),
        'barangay_employer'=>Str::random(20),
        'contact_number_employer'=>Str::random(20),
        'pregnant_status'=>Str::random(20),
        'comorbidity'=>Str::random(20),
        'comorbidity_yes'=>Str::random(20),
        'allergy'=>Str::random(20),
        'allergy_yes'=>Str::random(20),
        'diagnose_covid'=>Str::random(20),
        'date_diagnose_covid_yes'=>$this->faker->date(),
        'covid_classification'=>Str::random(20),
        'electronic_informed_consent'=>Str::random(20)
        ];
    }
}
