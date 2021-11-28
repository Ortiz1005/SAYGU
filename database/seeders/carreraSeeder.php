<?php

namespace Database\Seeders;

use App\Models\carrera;
use Illuminate\Database\Seeder;

class carreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        carrera::factory(50)->create();
    }
}
