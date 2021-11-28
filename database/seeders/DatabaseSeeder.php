<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = new user();
        
$this->call(administradorSeeder::class);  
$this->call(UserSeeder::class);
$this->call(alumnoSeeder::class);
$this->call(aulaSeeder::class);
$this->call(calificacionSeeder::class);
$this->call(carreraSeeder::class);
$this->call(grupoSeeder::class);
$this->call(horarioalumnoSeeder::class);
$this->call(horarioprofesorSeeder::class);
$this->call(inscripcionSeeder::class);
$this->call(materiaSeeder::class);
$this->call(pagosSeeder::class);
$this->call(profesorSeeder::class);
$this->call(semestreSeeder::class);
    }
}