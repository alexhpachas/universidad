<?php

namespace Database\Seeders;

use App\Models\Grupo;
use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create([
            'nombre'=>'A',
            'estado'=>2
        ]);

        Grupo::create([
            'nombre'=>'B',
            'estado'=>2
        ]);

        Grupo::create([
            'nombre'=>'C',
            'estado'=>2
        ]);

        Grupo::create([
            'nombre'=>'D',
            'estado'=>2
        ]);

        Grupo::create([
            'nombre'=>'E',
            'estado'=>2
        ]);

        Grupo::create([
            'nombre'=>'F',
            'estado'=>2
        ]);

    }
}
