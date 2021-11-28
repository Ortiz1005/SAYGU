<?php

namespace Database\Seeders;

use App\Models\horarioprofesor;
use Illuminate\Database\Seeder;

class horarioprofesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        horarioprofesor::factory(50)->create();
    }
}
