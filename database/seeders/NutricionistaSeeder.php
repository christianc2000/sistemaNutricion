<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nutricionista;

class NutricionistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nutricionista::create([
            'id'=>1,
            'profesion'=>'Nutriologo'
             ]);
    
    }
}
