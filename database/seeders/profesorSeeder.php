<?php

namespace Database\Seeders;

use App\Models\profesor;
use Illuminate\Database\Seeder;

class profesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        profesor::factory(50)->create();
    }
}
