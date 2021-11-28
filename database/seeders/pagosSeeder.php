<?php

namespace Database\Seeders;

use App\Models\pagos;
use Illuminate\Database\Seeder;

class pagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pagos::factory(50)->create();
    }
}
