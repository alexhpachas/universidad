<?php

namespace Database\Seeders;

use App\Models\CursoPlane;
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

        CursoPlane::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>1,
            'curso_id'=>1        
        ]);

        CursoPlane::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>1,
            'curso_id'=>2        
        ]);

        CursoPlane::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>1,
            'curso_id'=>3        
        ]);

        CursoPlane::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>1,
            'curso_id'=>4        
        ]);

        CursoPlane::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>1,
            'curso_id'=>5        
        ]);

        CursoPlane::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>1,
            'curso_id'=>6        
        ]);

        //DATOS PARA EL SEGUNDO CICLO

        CursoPlane::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>2,
            'curso_id'=>7        
        ]);

        CursoPlane::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>2,
            'curso_id'=>8       
        ]);

        CursoPlane::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>2,
            'curso_id'=>9       
        ]);

        CursoPlane::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>2,
            'curso_id'=>10        
        ]);

        CursoPlane::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>2,
            'curso_id'=>11        
        ]);

        CursoPlane::create([
            'plan_estudio_id'=>1,
            'ciclo_id'=>2,
            'curso_id'=>12        
        ]);

    }
}
