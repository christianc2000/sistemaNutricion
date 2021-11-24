<?php

namespace Database\Seeders;

use App\Models\Actividad;
use Illuminate\Database\Seeder;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actividads=([
            ['nombre' => '3 series de x12 Planchas en tripode',
                'valor_tiempo' => 10,
                'valor_calorias' => 230,
                'tipo' => 'F',
            ],
            ['nombre' => '3 series de 10 Abdominales',
            'valor_tiempo' => 10,
            'valor_calorias' => 260,
            'tipo' => 'F',
        ],
        ['nombre' => '5 series de 5 veces de sentadillas',
            'valor_tiempo' => 15,
            'valor_calorias' => 260,
            'tipo' => 'F',
        ],
        ['nombre' => 'Tomar 2,5 litros de agua',

            'tipo' => 'C',
        ],
        ]);
        foreach ($actividads as $actividad){
            Actividad::create($actividad);
        }
    }
}
