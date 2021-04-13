<?php

namespace Database\Factories;

use App\Models\Facultade;
use App\Models\Programa;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Programa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $programas = $this->faker->unique()->word();
        return [
            'nombre'=>$this->faker->sentence(),
            'codigo'=>$this->faker->sentence(),
            'abreviatura'=>$programas,
            'estado'=>$this->faker->randomElement([1,2]),
            'facultade_id'=>Facultade::all()->random()->id
        ];
    }
}
