<?php

namespace Database\Factories;

use App\Models\TaughtModule;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class TaughtModuleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TaughtModule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        // $faculty_id =  rand(1,5); //DB::table('faculty')->inRandomOrder()->first() ; //Random faculty id
        // $teacher =  DB::table('teacher')->where('faculty_id', '=', $faculty_id)->first();
        // $module = DB::table('module')->where('faculty_id', '=', $faculty_id)->first();
        return [
            // 'teacher_id' => $teacher->id,
            // 'module_id' =>   $module->id,
        ];
    }
}
