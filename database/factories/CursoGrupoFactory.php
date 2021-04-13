<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\CursoGrupo;
use App\Models\Grupo;
use App\Models\Periodo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoGrupoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CursoGrupo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'curso_id'=>Curso::all()->random()->id,
            'grupo_id'=>Grupo::all()->random()->id,
            'periodo_id'=>Periodo::all()->random()->id,
            'user_id'=>User::all()->random()->id
        ];
    }
}
