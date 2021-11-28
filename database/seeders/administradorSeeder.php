<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\administrador;

class administradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        administrador::factory(50)->create();
    }
}
