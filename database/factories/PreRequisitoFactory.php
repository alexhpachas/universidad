<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\PreRequisito;
use Illuminate\Database\Eloquent\Factories\Factory;

class PreRequisitoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PreRequisito::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'curso_id'=>Curso::all()->random()->id
        ];
    }
}
