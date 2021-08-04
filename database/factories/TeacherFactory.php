<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Genders Array
        $genders = array('male', 'female', 'others');
        $random_gender = $genders[ array_rand($genders) ] ;

        //Nationality Array
        $nationalities = array('Nepalese', 'American', 'Chinese', 'Indian', 'British', 'German');
        $random_nationality = $nationalities[ array_rand($nationalities) ] ;

        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->Address(),
            'phone' => $this->faker->PhoneNumber(),
            'gender' => $random_gender,
            'dob' => $this->faker->dateTime(),
            'nationality' => $random_nationality,
            'faculty_id' => rand(1, 5),
        ];
    }
}
