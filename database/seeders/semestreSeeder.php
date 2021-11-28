<?php

namespace Database\Seeders;

use App\Models\semestre;
use Illuminate\Database\Seeder;

class semestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        semestre::factory(50)->create();
    }
}
