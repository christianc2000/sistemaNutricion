<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = User::create([
            'name'=>'nutricionista',
            'email'=>'Nutridiet@gmail.com',
            'password'=>bcrypt('12345678'),
            'persona_id'=>1
         ]);

	$user->assignRole('nutricionista');
    }
}
