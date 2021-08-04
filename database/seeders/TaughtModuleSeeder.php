<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaughtModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $taught_module = \App\Models\TaughtModule::factory()->count(5)->create(); 
    }
}
