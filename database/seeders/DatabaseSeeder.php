<?php

namespace Database\Seeders;

use App\Models\Ciclo;
use App\Models\Curso;
use App\Models\CursoGrupo;
use App\Models\Entidade;
use App\Models\Facultade;
use App\Models\Grupo;
use App\Models\Horario;
use App\Models\Perfile;
use App\Models\Periodo;
use App\Models\Persona;
use App\Models\PlanEstudio;
use App\Models\PreRequisito;
use App\Models\Programa;
use App\Models\SesionZoom;
use App\Models\ZoomUsuario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Entidade::factory(10)->create();
        Ciclo::factory(10)->create();
        Periodo::factory(10)->create();
        PlanEstudio::factory(10)->create();
        ZoomUsuario::factory(10)->create();
        Persona::factory(10)->create();
        Grupo::factory(10)->create();
        Facultade::factory(10)->create();
        Programa::factory(10)->create();
        Curso::factory(10)->create();
        PreRequisito::factory(10)->create();
        $this->call(UserSeeder::class);
        Perfile::factory(10)->create();
        CursoGrupo::factory(10)->create();
        Horario::factory(10)->create();
        SesionZoom::factory(10)->create();
        
    }
}
