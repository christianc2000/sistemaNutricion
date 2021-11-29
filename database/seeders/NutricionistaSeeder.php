<?php

namespace Database\Seeders;

use App\Models\Nutricionista;
use App\Models\Persona;
use Illuminate\Database\Seeder;

class NutricionistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n=Persona::all();
        $n=$n->where('tipo','=','N')->first();
        Nutricionista::create([
            'id'=>$n->id,
            'profesion'=>'Dietética'
        ]);
    }
}
