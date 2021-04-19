<?php

namespace Database\Seeders;

use App\Models\PlanEstudio;
use Illuminate\Database\Seeder;

class PlanEstudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlanEstudio::create([
            'codigo'=>'2021-I',
            'estado'=>2,
            'programa_id'=>1 //ENFERMERIA
        ]);

        PlanEstudio::create([
            'codigo'=>'2021-I',
            'estado'=>2,
            'programa_id'=>2 //PSICOLOGIA
        ]);

        PlanEstudio::create([
            'codigo'=>'2021-I',
            'estado'=>2,
            'programa_id'=>3 //OBSTETRICIA
        ]);

        PlanEstudio::create([
            'codigo'=>'2021-I',
            'estado'=>2,
            'programa_id'=>4 //ADMINISTRACION Y FINANZAS
        ]);

        PlanEstudio::create([
            'codigo'=>'2021-I',
            'estado'=>2,
            'programa_id'=>5 //INGENIERIA DE SISTEMAS
        ]);

        PlanEstudio::create([
            'codigo'=>'2021-I',
            'estado'=>2,
            'programa_id'=>6 //INGENIERIA EN INDUSTRIAS ALIMENTARIAS
        ]);

        PlanEstudio::create([
            'codigo'=>'2021-I',
            'estado'=>2,
            'programa_id'=>7 //INGENIERIA INDUSTRIAL
        ]);

        PlanEstudio::create([
            'codigo'=>'2021-I',
            'estado'=>2,
            'programa_id'=>8 //CONTABILIDAD
        ]);

        PlanEstudio::create([
            'codigo'=>'2021-I',
            'estado'=>2,
            'programa_id'=>9 //DERECHO
        ]);
    }
}
