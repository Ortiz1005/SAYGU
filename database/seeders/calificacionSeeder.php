<?php

namespace Database\Seeders;

use App\Models\calificacion;
use Illuminate\Database\Seeder;

class calificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        calificacion::factory(50)->create();
    }
}
