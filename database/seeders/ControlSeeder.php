<?php

namespace Database\Seeders;

use App\Models\Control;
use Illuminate\Database\Seeder;

class ControlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $controls = ([
            [
                'fecha' => '09-22-2021',
                'tipo_control' => 'true',
                'tratamiento_id' => 1,
            ],
            [
                'fecha' => '10-02-2021',
                'tipo_control' => 'true',
                'tratamiento_id' => 1,
            ],
            [
                'fecha' => '10-13-2021',
                'tipo_control' => 'true',
                'tratamiento_id' => 2,
            ],
            [
                'fecha' => '10-23-2021',
                'tipo_control' => 'true',
                'tratamiento_id' => 2,
            ],
        ]);
        foreach ($controls as $control) {
            Control::create($control);
        }
    }
}
