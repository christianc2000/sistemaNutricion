<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        $this->call(UserSeeder::class);
        $this->call(PersonaSeeder::class);
        $this->call(NutricionistaSeeder::class);
        $this->call(PacienteSeeder::class);
        $this->call(TratamientoSeeder::class);
        $this->call(ControlSeeder::class);
        $this->call(ActividadSeeder::class);
    }
}
