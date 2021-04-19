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
        User::create([
            'name'=>'Alex Pachas',
            'email'=>'Alex.Pachas@gmail.com',
            'password'=>bcrypt('123456789')
        ]);
        User::create([
            'name'=>'angemar',
            'email'=>'angemar@autonomadeica.edu.pe',
            'password'=>bcrypt('Paraiso09$')
        ]);
        User::factory(9)->create();
    }
}
