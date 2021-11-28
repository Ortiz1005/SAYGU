<?php

namespace Database\Seeders;

use App\Models\alumno;
use Illuminate\Database\Seeder;

class alumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        alumno::factory(50)->create();
    }
}
