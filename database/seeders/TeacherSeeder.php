<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$teachers = factory('App\Teacher', 5)->create();
        $teacher = \App\Models\Teacher::factory()->count(5)->create(); 
    }
}
