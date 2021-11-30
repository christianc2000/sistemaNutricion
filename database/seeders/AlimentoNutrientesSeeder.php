<?php

namespace Database\Seeders;

use App\Models\AlimentoNutriente;
use App\Models\AlimentoNutrientes;
use App\Models\Nutriente;
use Illuminate\Database\Seeder;

class AlimentoNutrientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n = Nutriente::all();
        $an = ([
            [
                'cantidad' => 200,
                'alimento_id' => 1,
                'nutriente_id' => 1,
            ],
        ]);

        foreach ($an as $a) {
            AlimentoNutrientes::create($a);
        }
    }
}
