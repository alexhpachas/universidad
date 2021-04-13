<?php

namespace Database\Factories;

use App\Models\CursoGrupo;
use App\Models\Horario;
use Illuminate\Database\Eloquent\Factories\Factory;

class HorarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Horario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dia'=>$this->faker->randomElement([1,2,3,4,5,6,7]),
            'hora_inicio'=>$this->faker->time('17:50'),
            'hora_fin'=>$this->faker->time('17:50'),
            'estado'=>$this->faker->randomElement([1,2]),
            'curso_grupo_id'=>CursoGrupo::all()->random()->id
        ];
    }
}
