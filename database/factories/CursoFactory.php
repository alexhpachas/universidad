<?php

namespace Database\Factories;

use App\Models\Ciclo;
use App\Models\Curso;
use App\Models\PlanEstudio;
use App\Models\Programa;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo'=>$this->faker->unique()->word(20),
            'nombre'=>$this->faker->sentence(),
            'horas_teoricas'=>$this->faker->randomElement([1,2,3,4,5,6,7,8,9]),
            'horas_practicas'=>$this->faker->randomElement([1,2,3,4,5,6,7,8,9]),
            'creditos'=>$this->faker->randomElement([1,2,3,4,5,6,7,8,9]),
            'tipo'=>$this->faker->sentence(),
            'programa_id'=>Programa::all()->random()->id,
            'plan_estudio_id'=>PlanEstudio::all()->random()->id,
            'ciclo_id'=>Ciclo::all()->random()->id
        ];
    }
}
