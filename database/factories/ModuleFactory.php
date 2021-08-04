<?php

namespace Database\Factories;

use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModuleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = module::class;

    /**
     * Fillable properties of module
     */
    protected $fillable = ['module_name'];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'module_name' => $this->faker->text($maxNbChars = 15),
            'faculty_id' => rand(1, 5),
        ];
    }
}
