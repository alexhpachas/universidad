<?php

namespace Database\Seeders;


use App\Models\CursoPlaneCiclo;
use Illuminate\Database\Seeder;

class CursoPlaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DATOS PARA EL PRIMER CICLO

        CursoPlaneCiclo::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>1,
            'curso_id'=>1        
        ]);

        CursoPlaneCiclo::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>1,
            'curso_id'=>2        
        ]);

        CursoPlaneCiclo::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>1,
            'curso_id'=>3        
        ]);

        CursoPlaneCiclo::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>1,
            'curso_id'=>4        
        ]);

        CursoPlaneCiclo::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>1,
            'curso_id'=>5        
        ]);

        CursoPlaneCiclo::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>1,
            'curso_id'=>6        
        ]);

        //DATOS PARA EL SEGUNDO CICLO

        CursoPlaneCiclo::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>2,
            'curso_id'=>7        
        ]);

        CursoPlaneCiclo::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>2,
            'curso_id'=>8       
        ]);

        CursoPlaneCiclo::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>2,
            'curso_id'=>9       
        ]);

        CursoPlaneCiclo::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>2,
            'curso_id'=>10        
        ]);

        CursoPlaneCiclo::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>2,
            'curso_id'=>11        
        ]);

        CursoPlaneCiclo::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>2,
            'curso_id'=>12        
        ]);

    }
}
