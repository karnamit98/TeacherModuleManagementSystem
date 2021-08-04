<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$faculties = factory('App\Faculty', 5)->create();
        $faculty = \App\Models\Faculty::factory()->count(5)->create(); 
    }
}
