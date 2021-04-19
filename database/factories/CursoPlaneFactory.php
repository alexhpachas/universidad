<?php

namespace Database\Factories;

use App\Models\Ciclo;
use App\Models\Curso;
use App\Models\Model;
use App\Models\PlanEstudio;

use Illuminate\Database\Eloquent\Factories\Factory;

class CursoPlaneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'cuso_id'=>Curso::all()->random()->id,
            'plan_estudio_id'=>PlanEstudio::all()->random()->id,
            'ciclo_id'=>Ciclo::all()->random()->id
        ];
    }
}
