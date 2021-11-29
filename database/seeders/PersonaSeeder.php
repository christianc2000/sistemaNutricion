<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persona;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::create([

        'ci'=>'8233098',
        'nombres'=>'Adam',
        'apellidos'=>'Rodriguez saavedra',
        'fechaNacimiento'=>'12/05/2000',
        'sexo'=>'M',
        'celular'=>73161584
         ]);

    }
}
