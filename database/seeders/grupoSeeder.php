<?php

namespace Database\Seeders;

use App\Models\grupo;
use Illuminate\Database\Seeder;

class grupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        grupo::factory(50)->create();
    }
}
