<?php

namespace Database\Seeders;

use App\Models\inscripcion;
use Illuminate\Database\Seeder;

class inscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        inscripcion::factory(50)->create();
    }
}
