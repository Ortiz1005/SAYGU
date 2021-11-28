<?php

namespace Database\Seeders;

use App\Models\horarioalumno;
use Illuminate\Database\Seeder;

class horarioalumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        horarioalumno::factory(50)->create();
    }
}
