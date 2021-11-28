<?php

namespace Database\Seeders;

use App\Models\aula;
use Illuminate\Database\Seeder;

class aulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        aula::factory(50)->create();
    }
}
