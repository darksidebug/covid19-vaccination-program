<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'username' => $this->faker->unique()->lastName,
            'user_type' => 'Admin',
            'password' => Hash::make('1234'),
            'municipality' => 'Malitbog',
            'name_of_facility'=>'SOYMP',
            'prc_license_number'=>$this->faker->randomNumber(),
            'role'=>'nurse'
        ];
    }
}
